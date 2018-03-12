<?php
/*
Plugin Name: Allied Wallet - WooCommerce Gateway
Plugin URI: http://www.alliedwallet.com/
Description: Extends WooCommerce by Adding the Allied Wallet Direct Payment Gateway.
Version: 2.0
Author: Justin Grierson, Allied Wallet
Author URI: http://www.alliedwallet.com/
*/

// Include our Gateway Class and register Payment Gateway with WooCommerce
add_action( 'plugins_loaded', 'spyr_alliedwallet_aim_init', 0 );
function spyr_alliedwallet_aim_init() {
	// If the parent WC_Payment_Gateway class doesn't exist
	// it means WooCommerce is not installed on the site
	// so do nothing
	if ( ! class_exists( 'WC_Payment_Gateway' ) ) return;
	
	// If we made it this far, then include our Gateway Class
	include_once( 'woocommerce-alliedwallet-aim.php' );

	// Now that we have successfully included our class,
	// Lets add it too WooCommerce
	add_filter( 'woocommerce_payment_gateways', 'spyr_add_alliedwallet_aim_gateway' );
	function spyr_add_alliedwallet_aim_gateway( $methods ) {
		$methods[] = 'AlliedWallet_Direct';
		return $methods;
	}
}

// Add custom action links
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'spyr_alliedwallet_aim_action_links' );
function spyr_alliedwallet_aim_action_links( $links ) {
	$plugin_links = array(
		'<a href="' . admin_url( 'admin.php?page=wc-settings&tab=checkout' ) . '">' . __( 'Settings', 'spyr-alliedwallet-aim' ) . '</a>',
	);

	// Merge our new link with the default ones
	return array_merge( $plugin_links, $links );	
}