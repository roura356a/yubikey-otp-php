<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Yubikey OTP Access</title>
</head>
<body>

<form method="post">
	<label for="key">Yubikey OTP</label>
	<input data-lpignore="true" autocomplete="off" placeholder="Push the button of your Yubikey here" id="key" type="password" name="key">
</form>

<h1><?php echo $verify === true ? 'Wohooo!' : $verify->message; ?></h1>

</body>
</html>
