<?php
echo "HELLO";
require('textlocal.class.php');
include 'credentials.php';

echo "HELLO";

if(isset($_POST[sendOTP])){
	$textlocal = new Textlocal(false, false, API_KEY);

	$numbers = array(918741940380);
	$sender = 'TXTLCL';
	$OTP = mt_rand(100000,999999);
	$message = "This is your OTP : " . $OTP;

	try {
	    $result = $textlocal->sendSms($numbers, $message, $sender);
	    setcookie('otp',$OTP);
	    print_r($result);

	} catch (Exception $e) {
	    die('Error: ' . $e->getMessage());
	}
}
?>