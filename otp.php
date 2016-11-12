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
	<input id="key" type="text" name="key">
</form>

<h1><?php echo $verify === true ? 'Wohooo!' : $verify->message; ?></h1>

</body>
</html>
