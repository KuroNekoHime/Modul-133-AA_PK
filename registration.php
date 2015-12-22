<?php
	$loginname = $_POST["eingabename"];
        $loginpasswort1 = $_POST["passwort1"];
	$loginpasswort2 = $_POST["passwort2"];

	if($loginpasswort1 == $loginpasswort2){
        
	$open = fopen("users.txt", "a");
	fwrite($open, $loginname); 
	fwrite($open, ":");
	fwrite($open,  $loginpasswort2);
	fwrite($open, "\n");
	fclose($open);
	echo "$loginname your registration was successfull!";
	echo "<a href='login.php'>Login!</a>";

	}else{
	echo "Your Password's doesnt match!";
	echo "<br>";
	echo "<a href='register.php'>Try again!</a>";
	}
?>
