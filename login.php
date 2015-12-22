<html>
<head>
	<title>Login</title>
	<link rel='stylesheet' type='text/css' href='./style_login.css' />
</head>
<body>
	<div id="content">
	<h2>Damit Sie unsere Seite öffnen können, bitten wir Sie sich erst anzumelden!</h2>
	<form action="pruefen.php" method="post">
	<lable for="loginname">Namenseingabe:</label><br>
	<input type="text" name="loginname" required><br>
	
	<lable for="loginpasswort">Passworteingabe:</lable><br>
	<input type="password" name="loginpasswort" required><br>

	<input type="submit" value="Abschicken">
	<a href="register.php">Registrieren</a>
	</div>
</form>
</body>
</html>
