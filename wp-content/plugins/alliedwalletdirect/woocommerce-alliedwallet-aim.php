<?php
/* Allied Wallet Direct Payment Gateway Class */
class AlliedWallet_Direct extends WC_Payment_Gateway {

	// Setup our Gateway's id, description and other values
	function __construct() {

		// The global ID for this Payment method
		$this->id = "spyr_alliedwallet_aim";

		// The Title shown on the top of the Payment Gateways Page next to all the other Payment Gateways
		$this->method_title = __( "Allied Wallet Payment Gateway", 'spyr-alliedwallet-aim' );

		// The description for this Payment Gateway, shown on the actual Payment options page on the backend
		$this->method_description = __( "Allied Wallet Payment Gateway", 'spyr-alliedwallet-aim' );

		// The title to be used for the vertical tabs that can be ordered top to bottom
		$this->title = __( "Allied Wallet Payment Gateway", 'spyr-alliedwallet-aim' );

		// If you want to show an image next to the gateway's name on the frontend, enter a URL to an image.
		$this->icon = null;

		// Bool. Can be set to true if you want payment fields to show on the checkout 
		// if doing a direct integration, which we are doing in this case
		$this->has_fields = true;

		// Supports the default credit card form
		$this->supports = array( 'default_credit_card_form' );

		// This basically defines your settings which are then loaded with init_settings()
		$this->init_form_fields();

		// After init_settings() is called, you can get the settings and load them into variables, e.g:
		// $this->title = $this->get_option( 'title' );
		$this->init_settings();
		
		// Turn these settings into variables we can use
		foreach ( $this->settings as $setting_key => $value ) {
			$this->$setting_key = $value;
		}
		
		// Lets check for SSL
		add_action( 'admin_notices', array( $this,	'do_ssl_check' ) );
		
		// Save settings
		if ( is_admin() ) {
			// Versions over 2.0
			// Save our administration options. Since we are not going to be doing anything special
			// we have not defined 'process_admin_options' in this class so the method in the parent
			// class will be used instead
			add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );
		}		
	} // End __construct()

	// Build the administration fields for this specific Gateway
	public function init_form_fields() {
		$this->form_fields = array(
			'enabled' => array(
				'title'		=> __( 'Enable / Disable', 'spyr-alliedwallet-aim' ),
				'label'		=> __( 'Enable this payment gateway', 'spyr-alliedwallet-aim' ),
				'type'		=> 'checkbox',
				'default'	=> 'no',
			),
			'title' => array(
				'title'		=> __( 'Title', 'spyr-alliedwallet-aim' ),
				'type'		=> 'text',
				'desc_tip'	=> __( 'Payment title the customer will see during the checkout process.', 'spyr-alliedwallet-aim' ),
				'default'	=> __( 'Credit card', 'spyr-alliedwallet-aim' ),
			),
			'description' => array(
				'title'		=> __( 'Description', 'spyr-alliedwallet-aim' ),
				'type'		=> 'textarea',
				'desc_tip'	=> __( 'Payment description the customer will see during the checkout process.', 'spyr-alliedwallet-aim' ),
				'default'	=> __( 'Pay securely using your credit card.', 'spyr-alliedwallet-aim' ),
				'css'		=> 'max-width:350px;'
			),
			'mid' => array(
				'title'		=> __( 'Merchant Identification Number', 'spyr-alliedwallet-aim' ),
				'type'		=> 'text',
				'desc_tip'	=> __( 'MID', 'spyr-alliedwallet-aim' ),
			),
			'sida' => array(
				'title'		=> __( 'Site Identification Number', 'spyr-alliedwallet-aim' ),
				'type'		=> 'text',
				'desc_tip'	=> __( 'SID', 'spyr-alliedwallet-aim' ),
			),
			'token' => array(
				'title'		=> __( 'Access Bearer Token', 'spyr-alliedwallet-aim' ),
				'type'		=> 'textarea',
				'desc_tip'	=> __( 'This is a token for using Direct Integration', 'spyr-alliedwallet-aim' ),
				'default'	=> __( 'Copy the token from your merchant portal', 'spyr-alliedwallet-aim' ),
				'css'		=> 'max-width:350px;'
			),
			'environment' => array(
				'title'		=> __( 'AlliedWallet Test Mode', 'spyr-alliedwallet-aim' ),
				'label'		=> __( 'Enable Test Mode', 'spyr-alliedwallet-aim' ),
				'type'		=> 'checkbox',
				'description' => __( 'Place the payment gateway in test mode.', 'spyr-alliedwallet-aim' ),
				'default'	=> 'no',
			)
		);		
	}
	
	// Submit payment and handle response
	public function process_payment( $order_id ) {
		global $woocommerce;
		
		// Get this Order's information so that we know
		// who to charge and how much
		$customer_order = new WC_Order( $order_id );
		
		// Are we testing right now or is it a real transaction
		$environment = ( $this->environment == "yes" ) ? 'TRUE' : 'FALSE';

		// Decide which URL to post to
		$environment_url = ( "FALSE" == $environment ) 
						   ? 'https://api.alliedwallet.com/Merchants/3/saletransactions'
						   : 'https://api.alliedwallet.com/Merchants/3/saletransactions';

		// This is where the fun stuff begins
		$payload = array(
			// AlliedWallet Credentials and API Info
 	'amount' => '23',
   'SiteId' => '55013',
   'Currency' => 'GBP',
   'FirstName' => 'justin',
   'LastName' => 'grierson',
   'Phone' => '123123123',
   'AddressLine1' => '123 werwerwe',
   'AddressLine2' => '1',
   'City' => 'London',
   'State' => 'London',
   'CountryId' => 'UK',
   'PostalCode' => 'IG4 3ED',
   'email' => 'ju3tin@hotmail.co.uk',
   'cardNumber' => '123',
   'NameOnCard' => 'justin grierson',
   'ExpirationMonth' => '11',
   'ExpirationYear' => '2020',
   'CvvCode' => '123',
   'TrackingId' => '123123',
		);
	
		// Send this payload to AlliedWallet for processing
		$response = wp_remote_post( $environment_url, array(
			'method'    => 'POST',
			'body'      => json_encode( $payload ),
			'timeout'   => 90,
			'sslverify' => false,
			'headers' => array(),
		) );

		if ( is_wp_error( $response ) ) {
 
    $html = '<div id="post-error">';
        $html .= __( 'There was a problem retrieving the response from the server.', 'wprp-example' );
    $html .= '</div><!-- /#post-error -->';
 
}
else {
 
    $html = '<div id="post-success">';
        $html .= '<p>' . __( 'Your message posted with success! The response was as follows:', 'wprp-example' ) . '</p>';
        $html .= '<p id="response-data">' . $response['body'] . '</p>';
    $html .= '</div><!-- /#post-error -->';
 
}
 
$content .= $html;

		// Get the values we need
		$r['response_code']             = $resp[0];
		$r['response_sub_code']         = $resp[1];
		$r['response_reason_code']      = $resp[2];
		$r['response_reason_text']      = $resp[3];

		// Test the code to know if the transaction went through or not.
		// 1 or 4 means the transaction was a success
		if ( ( $r['response_code'] == 1 ) || ( $r['response_code'] == 4 ) ) {
			// Payment has been successful
			$customer_order->add_order_note( __( 'AlliedWallet payment completed.', 'spyr-alliedwallet-aim' ) );
												 
			// Mark order as Paid
			$customer_order->payment_complete();

			// Empty the cart (Very important step)
			$woocommerce->cart->empty_cart();

			// Redirect to thank you page
			return array(
				'result'   => 'success',
				'redirect' => $this->get_return_url( $customer_order ),
			);
		} else {
			// Transaction was not succesful
			// Add notice to the cart
			wc_add_notice( $r['response_reason_text'], 'error' );
			// Add note to the order for your reference
			$customer_order->add_order_note( 'Error: '. $r['response_reason_text'] );
		}

	}
	
	// Validate fields
	public function validate_fields() {
		return true;
	}
	
	// Check if we are forcing SSL on checkout pages
	// Custom function not required by the Gateway
	public function do_ssl_check() {
		if( $this->enabled == "yes" ) {
			if( get_option( 'woocommerce_force_ssl_checkout' ) == "no" ) {
				echo "<div class=\"error\"><p>". sprintf( __( "<strong>%s</strong> is enabled and WooCommerce is not forcing the SSL certificate on your checkout page. Please ensure that you have a valid SSL certificate and that you are <a href=\"%s\">forcing the checkout pages to be secured.</a>" ), $this->method_title, admin_url( 'admin.php?page=wc-settings&tab=checkout' ) ) ."</p></div>";	
			}
		}		
	}

} // End of SPYR_alliedwallet_AIM