<?php

/*
 * SimpleModal Contact Form
 * http://www.ericmmartin.com/projects/simplemodal/
 * http://code.google.com/p/simplemodal/
 *
 * Copyright (c) 2009 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Revision: $Id: contact-dist.php 254 2010-07-23 05:14:44Z emartin24 $
 *
 */

// User settings
$to = "tapa@iinet.net.au";
$subject = "Tapa Catering Order: ";
// false = do not include
$extra = array(
	"form_subject"	=> true,
	"form_cc"		=> true,
	"ip"			=> false,
	"user_agent"	=> false

);

// Process
$action = isset($_POST["action"]) ? $_POST["action"] : "";
if (empty($action)) {
	// Send back the contact form HTML
    
	$output = "<div style='display:none'>
	<div class='contact-top'></div>
	<div class='contact-content'>
		<h1 class='contact-title'>Please place your order:</h1>
		<div class='contact-loading' style='display:none'></div>
		<div class='contact-message' style='display:none'></div>
		<form action='#' style='display:none'>
			<label for='contact-name'>Name:</label>
			<input type='text' id='contact-name' class='contact-input' name='name' required='required' placeholder='enter your name' />
            <label for='contact-company'>Company:</label>
            <input type='text' id='contact-company' class='contact-input' name='company' required='required' placeholder='company name' />
			<label for='contact-email'>Email:</label>
			<input type='email' id='contact-email' class='contact-input' name='email' required='required' placeholder='name@example.com'/>
            <label for='contact-delivery'>Delivery details:</label>
            <input type='text' id='contact-delivery' class='contact-input' name='delivery_details' required='required'>
            <label for='contact-number'>Number of people:</label>
            <input type='text' id='contact-number' class='contact-input' name='num_people'>
            <label for='contact-date'>Date required:</label>
            <input type='date' id='contact-date' class='contact-input' name='date_req' required='required'>
            <br clear='left'>
            <label for='contact-time'>Time required:</label>
            <input type='time' id='contact-time' class='contact-input' name='time_req' required='required'>
            
            
            
            ";


    $output .= "
			<label for='contact-message'>Order/message:</label>
			<textarea id='contact-message' class='contact-input' name='message' cols='60' rows='8' tabindex='1004'></textarea>
			<br/>";

	if ($extra["form_cc"]) {
		$output .= "
			<label>&nbsp;</label>
			<input type='checkbox' id='contact-cc' name='cc' value='1' tabindex='1005' /> <span class='contact-cc'>Send me a copy</span>
			<br/>";
	}

	$output .= "
			<label>&nbsp;</label>
			<button type='submit' class='contact-send contact-button' tabindex='1006'>Send</button>
			<button type='submit' class='contact-cancel contact-button simplemodal-close' tabindex='1007'>Cancel</button>
			<br/>
			<input type='hidden' name='token' value='" . smcf_token($to) . "'/>
		</form>
	</div>
	<div class='contact-bottom'><a href='#'>Powered by Pixel&amp;Code</a></div>
</div>";

	echo $output;
}
else if ($action == "send") {
	// Send the email
	$name = isset($_POST["name"]) ? $_POST["name"] : "";
    $company = isset($_POST["company"]) ? $_POST["company"] : "";
	$email = isset($_POST["email"]) ? $_POST["email"] : "";
	$subject = isset($_POST["subject"]) ? $_POST["subject"] : $subject;
    $date_req = isset($_POST["date_req"]) ? $_POST["date_req"] : "";
	$time_req = isset($_POST["time_req"]) ? $_POST["time_req"] : "";
    $delivery_details = isset($_POST["delivery_details"]) ? $_POST["delivery_details"] : "";
	$message = isset($_POST["message"]) ? $_POST["message"] : "";
    $num_people = isset($_POST["num_people"]) ? $_POST["num_people"] : "";
	$cc = isset($_POST["cc"]) ? $_POST["cc"] : "";
	$token = isset($_POST["token"]) ? $_POST["token"] : "";
    

	// make sure the token matches
	if ($token === smcf_token($to)) {
		smcf_send($name, $email, $subject, $date_req, $time_req, $delivery_details, $num_people, $message, $company, $cc);
		echo "Your message was successfully sent.";
	}
	else {
		echo "Unfortunately, your message could not be verified.";
	}
}

function smcf_token($s) {
	return md5("smcf-" . $s . date("WY"));
}

// Validate and send email
function smcf_send($name, $email, $subject, $date_req, $time_req, $delivery_details, $num_people, $message, $company, $cc) {
	global $to, $extra;

	// Filter and validate fields
	$name = smcf_filter($name);
    $company = smcf_filter($company);
	$email = smcf_filter($email);
    $subject .= 'Date required: ' .$date_req. ' ';
	if (!smcf_validate_email($email)) {
		$subject .= " - invalid email";
		$message .= "\n\nBad email: $email";
		$email = $to;
		$cc = 0; // do not CC "sender"
	}

	// Set and wordwrap message body
	$body =   "From: $name\n\n";
    $body .=  "Company: $company\n\n";
    $body .=  "Email address: $email\n\n";
    $body .=  "Delivery details: $delivery_details\n\n";
    $body .=  "Date required: $date_req\n\n";
    $body .=  "Time required : $time_req\n\n";
    $body .=  "Number of people: $num_people\n\n";
	$body .=  "Order/message: \n";
    $body .= $message;
	$body = wordwrap($body, 70);

	// Build header
	$headers = "From: $email\n";
	if ($cc == 1) {
		$headers .= "Cc: $email\n";
	}
	$headers .= "X-Mailer: PHP/TapaCateringMenu";

	// UTF-8
	if (function_exists('mb_encode_mimeheader')) {
		$subject = mb_encode_mimeheader($subject, "UTF-8", "B", "\n");
	}
	else {
		// you need to enable mb_encode_mimeheader or risk 
		// getting emails that are not UTF-8 encoded
	}
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/plain; charset=utf-8\n";
	$headers .= "Content-Transfer-Encoding: quoted-printable\n";

	// Send email
	@mail($to, $subject, $body, $headers) or 
		die("Unfortunately, a server issue prevented delivery of your message.");
}

// Remove any un-safe values to prevent email injection
function smcf_filter($value) {
	$pattern = array("/\n/","/\r/","/content-type:/i","/to:/i", "/from:/i", "/cc:/i");
	$value = preg_replace($pattern, "", $value);
	return $value;
}

// Validate email address format in case client-side validation "fails"
function smcf_validate_email($email) {
	$at = strrpos($email, "@");

	// Make sure the at (@) sybmol exists and  
	// it is not the first or last character
	if ($at && ($at < 1 || ($at + 1) == strlen($email)))
		return false;

	// Make sure there aren't multiple periods together
	if (preg_match("/(\.{2,})/", $email))
		return false;

	// Break up the local and domain portions
	$local = substr($email, 0, $at);
	$domain = substr($email, $at + 1);


	// Check lengths
	$locLen = strlen($local);
	$domLen = strlen($domain);
	if ($locLen < 1 || $locLen > 64 || $domLen < 4 || $domLen > 255)
		return false;

	// Make sure local and domain don't start with or end with a period
	if (preg_match("/(^\.|\.$)/", $local) || preg_match("/(^\.|\.$)/", $domain))
		return false;

	// Check for quoted-string addresses
	// Since almost anything is allowed in a quoted-string address,
	// we're just going to let them go through
	if (!preg_match('/^"(.+)"$/', $local)) {
		// It's a dot-string address...check for valid characters
		if (!preg_match('/^[-a-zA-Z0-9!#$%*\/?|^{}`~&\'+=_\.]*$/', $local))
			return false;
	}

	// Make sure domain contains only valid characters and at least one period
	if (!preg_match("/^[-a-zA-Z0-9\.]*$/", $domain) || !strpos($domain, "."))
		return false;	

	return true;
}

exit;

?>