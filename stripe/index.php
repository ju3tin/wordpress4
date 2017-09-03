<?php
/**
 * Stripe - Payment Gateway integration example
 * ==============================================================================
 * 
 * @version v1.0: stripe_pay_demo.php 2016/09/29
 * @copyright Copyright (c) 2016, http://www.ilovephp.net
 * @author Sagar Deshmukh <sagarsdeshmukh91@gmail.com>
 * You are free to use, distribute, and modify this software
 * ==============================================================================
 *
 */

// Stripe library
require '../stripe/stripe/Stripe.php';

$params = array(
	"testmode"   => "on",
	"private_live_key" => "sk_live_xxxxxxxxxxxxxxxxxxxxx",
	"public_live_key"  => "pk_live_xxxxxxxxxxxxxxxxxxxxx",
	"private_test_key" => "sk_test_xxxxxxxxxxxxxxxxxxxxx",
	"public_test_key"  => "pk_test_xxxxxxxxxxxxxxxxxxxxx"
);

if ($params['testmode'] == "on") {
	Stripe::setApiKey($params['private_test_key']);
	$pubkey = $params['public_test_key'];
} else {
	Stripe::setApiKey($params['private_live_key']);
	$pubkey = $params['public_live_key'];
}

if(isset($_POST['stripeToken']))
{
	$amount_cents = str_replace(".","","10.52");  // Chargeble amount
	$invoiceid = "14526321";                      // Invoice ID
	$description = "Invoice #" . $invoiceid . " - " . $invoiceid;
	
	try {

		$charge = Stripe_Charge::create(array(		 
			  "amount" => $amount_cents,
			  "currency" => "usd",
			  "source" => $_POST['stripeToken'],
			  "description" => $description)			  
		);

		if ($charge->card->address_zip_check == "fail") {
			throw new Exception("zip_check_invalid");
		} else if ($charge->card->address_line1_check == "fail") {
			throw new Exception("address_check_invalid");
		} else if ($charge->card->cvc_check == "fail") {
			throw new Exception("cvc_check_invalid");
		}
		// Payment has succeeded, no exceptions were thrown or otherwise caught				

		$result = "success";

	} catch(Stripe_CardError $e) {			

	$error = $e->getMessage();
		$result = "declined";

	} catch (Stripe_InvalidRequestError $e) {
		$result = "declined";		  
	} catch (Stripe_AuthenticationError $e) {
		$result = "declined";
	} catch (Stripe_ApiConnectionError $e) {
		$result = "declined";
	} catch (Stripe_Error $e) {
		$result = "declined";
	} catch (Exception $e) {

		if ($e->getMessage() == "zip_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "address_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "cvc_check_invalid") {
			$result = "declined";
		} else {
			$result = "declined";
		}		  
	}
	
	echo "<BR>Stripe Payment Status : ".$result;
	
	echo "<BR>Stripe Response : ";
	
	print_r($charge); exit;
}
?>
<?php /*<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Stripe Pay Custom Integration Demo</title>
</head>
<body>
<link href="../Stripe_gateway_integration_demo_with_PHP/style.css" type="text/css" rel="stylesheet" />
<h1 class="bt_title">Stripe Pay Demo</h1>
<div class="dropin-page">
  <form action="" method="POST" id="payment-form">
  <span class="payment-errors"></span>

  <div class="form-row">
    <label>
      <span>Card Number</span>
      <input type="text" size="20" data-stripe="number">
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>Expiration (MM/YY)</span>
      <input type="text" size="2" data-stripe="exp_month">
    </label>
    <span> / </span>
    <input type="text" size="2" data-stripe="exp_year">
  </div>

  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-stripe="cvc">
    </label>
  </div>
  <input type="submit" class="submit" value="Submit Payment">
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- TO DO : Place below JS code in js file and include that JS file -->
<script type="text/javascript">
	Stripe.setPublishableKey('<?php echo $params['public_test_key']; ?>');
  
	$(function() {
	  var $form = $('#payment-form');
	  $form.submit(function(event) {
		// Disable the submit button to prevent repeated clicks:
		$form.find('.submit').prop('disabled', true);
	
		// Request a token from Stripe:
		Stripe.card.createToken($form, stripeResponseHandler);
	
		// Prevent the form from being submitted:
		return false;
	  });
	});

	function stripeResponseHandler(status, response) {
	  // Grab the form:
	  var $form = $('#payment-form');
	
	  if (response.error) { // Problem!
	
		// Show the errors on the form:
		$form.find('.payment-errors').text(response.error.message);
		$form.find('.submit').prop('disabled', false); // Re-enable submission
	
	  } else { // Token was created!
	
		// Get the token ID:
		var token = response.id;

		// Insert the token ID into the form so it gets submitted to the server:
		$form.append($('<input type="hidden" name="stripeToken">').val(token));
	
		// Submit the form:
		$form.get(0).submit();
	  }
	};
</script>
</body>
</html>*/ ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Credit card payment form - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row-fluid">
      <form class="form-horizontal">
        <fieldset>
          <div id="legend">
            <legend class="">Payment</legend>
          </div>
     
          <!-- Name -->
          <div class="control-group">
            <label class="control-label"  for="username">Card Holder's Name</label>
            <div class="controls">
              <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
            </div>
          </div>
     
          <!-- Card Number -->
          <div class="control-group">
            <label class="control-label" for="email">Card Number</label>
            <div class="controls">
              <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
            </div>
          </div>
     
          <!-- Expiry-->
          <div class="control-group">
            <label class="control-label" for="password">Card Expiry Date</label>
            <div class="controls">
              <select class="span3" name="expiry_month" id="expiry_month">
                <option></option>
                <option value="01">Jan (01)</option>
                <option value="02">Feb (02)</option>
                <option value="03">Mar (03)</option>
                <option value="04">Apr (04)</option>
                <option value="05">May (05)</option>
                <option value="06">June (06)</option>
                <option value="07">July (07)</option>
                <option value="08">Aug (08)</option>
                <option value="09">Sep (09)</option>
                <option value="10">Oct (10)</option>1
                <option value="11">Nov (11)</option>
                <option value="12">Dec (12)</option>
              </select>
              <select class="span2" name="expiry_year">
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
     
          <!-- CVV -->
          <div class="control-group">
            <label class="control-label"  for="password_confirm">Card CVV</label>
            <div class="controls">
              <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="span2">
            </div>
          </div>
     
          <!-- Save card -->
          <div class="control-group">
            <div class="controls">
              <label class="checkbox" for="save_card">
                <input type="checkbox" id="save_card" value="option1">
                Save card on file?
              </label>
            </div>
          </div>
     
          <!-- Submit -->
          <div class="control-group">
            <div class="controls">
              <button class="btn btn-success">Pay Now</button>
            </div>
          </div>
     
        </fieldset>
      </form>
    </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
