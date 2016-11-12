# yubikey-otp-php
:key: Bare-minimum example to verify a OTP against Yubikey's API.

## Requirements
- `curl` enabled in PHP.
- _PEAR_ PHP extension.
- Yubikey PEAR component.

## Usage
1. Install the Yubikey PEAR component:
```
$ wget https://developers.yubico.com/php-yubico/Releases/Auth_Yubico-2.5.tgz
$ pear install Auth_Yubico-2.5.tgz
 ```
2. Go to [Yubico](https://upgrade.yubico.com/getapikey/) to get an API KEY.
3. Edit `config.php` with your credentials.

## Contribute
Please fork and send pull requests =)