<?php

require_once 'vendor/Yubico.php';
$config  = require_once 'config.php';
$yubikey = new Auth_Yubico( $config['clientId'], $config['clientKey'] );

$key = $_POST['key'];

if ( $key ) {
	$verify = verifyYubikey( $key, $yubikey );
}

/**
 * This basic function just validates the OTP against Yubico's API
 * using the API key stored in `config.php`.
 *
 * @param $key
 * @param $yubikey
 *
 * @return mixed
 */
function verifyYubikey( $key, $yubikey ) {
	$otp  = $yubikey->parsePasswordOTP( htmlspecialchars( $key ) )['otp'];
	$auth = $yubikey->verify( $otp );

	return gettype( $auth ) == 'object' ? $auth : true;
}