<html>
<head>
	<title>Genehmigung</title>
	<link rel='stylesheet' type='text/css' href='./style_login.css' />
</head>
<body>
<div id="content">
<?php
    /* Prüfen mit definierten Werten direkt in der Datei
    session_start();

    $_logindaten = array("name"=>"muster max", "passwort"=>"mueller");

    if (isset($_POST["loginname"]) && isset($_POST["loginpasswort"]))
        {
        if ($_logindaten["name"] == $_POST["loginname"] &&
            $_logindaten["passwort"] == $_POST["loginpasswort"])
            {
            	//Falls beide Eingaben korrekt sind
		//wird der User eingeloggt, bzw. das Login "gemerkt".
    
            $_SESSION["login"] = 1;
	    $geloggt = $_SESSION["login"];
            }
        }

    if ($geloggt != 1)
        {
        echo "Falsche Angaben!";
	echo "<br>";
	echo "Bitte versuchen Sie es erneut!"; 
        }
    else
	{
	echo "Sie haben sich erfolgreich eingeloggt!";
	}
    */

    /*Prüfen mit derfinierten Werten in externer Datei */
	session_start();
	
	$loginname = $_POST["loginname"];
	$loginpasswort = $_POST["loginpasswort"];
	$userlist = file("users.txt");

		foreach ($userlist as $user) 	{
    		$user_details = explode(":", $user);
    			if (trim($user_details[0]) == $loginname && trim($user_details[1]) == $loginpasswort){
				$_SESSION["login"] = 1;
        			break;
    												 }
						 }
	if (isset ($_SESSION["login"])) {
    		echo "<br> Guten Tag $loginname, Sie haben sich sich erfolgreich eingeloggt. <br>";
		echo "<a href='index.php'>Weiter zum Shop!</a>";
	} else {
    		echo "<br> You have entered the wrong username or password. Please try again. <br>";
}
?> 
</div>
</body>
</html>
