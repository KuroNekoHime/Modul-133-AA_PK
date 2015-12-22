<html>
<head>
	<title>Registration</title>
	<link rel='stylesheet' type='text/css' href='./style_register.css' />
</head>
<body>
	<div id="content">
	<h2>Please enter your Data here:</h2>
	<form action="registration.php" method="post">
	<label for="eingabename">Username:</lable><br>
	<input type="text" name="eingabename" required><br>
	
	<lable for="passwort1">Password:</label><br>
	<input type="password" name="passwort1" required><br>
	
	<lable for="passwort2">Repeat your Password:</label><br>
	<input type="password" name="passwort2" required><br>

	<input type="submit" value="Registrieren">
	</div>
</form>
</body>
</html>
