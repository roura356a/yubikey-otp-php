<?php

require_once 'Auth/Yubico.php';
$config  = require_once 'config.php';
$yubikey = new Auth_Yubico($config['clientId'], $config['clientKey']);

$key = $_POST['key'];

if ($key) {
    $verify = verifyYubikey($key, $config['auth_keys'], $yubikey);
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
function verifyYubikey($key, $auth_keys, $yubikey)
{
    $otp  = $yubikey->parsePasswordOTP(htmlspecialchars($key))['otp'];
    $auth = $yubikey->verify($otp);

    if (!in_array(substr($key, 0, 12), $auth_keys)) {
        return (object)['message' => 'KEY_NOT_RECOGNISED'];
    }

    return gettype($auth) === 'object' ? $auth : true;
}
