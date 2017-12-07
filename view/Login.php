<?php
session_start();
?>

<html>
	<head>
		<meta charset="UTF-8">
			<title>Verkeersveiligheidmonitor</title>
		<link rel="stylesheet" href="../css/stylesheet.css">
		<img src="http://www.nlingenieurs.nl/wp-content/uploads/2013/03/logo-Royal-HaskoningDHV.jpg"
	     alt="Mountain View" style="width:10%;height:10%;" align="right">
	</head>

<form method="post" action="../controller/loginController.php">
	<body>
  	<div class="login">
  		<h2>Log In</h2>
  		<fieldset>
    		<input type="hidden" value="login" name="action">
    		<input type="text" name="username" placeholder="Gebruikersnaam" />
  			<input type="password" name="password" placeholder="Wachtwoord" />
  		</fieldset>
  		<input name="submit" type="submit" value="login">
  		<div class="utilities">
    		<a href="#">Wachtwoord vergeten?</a>
    		<a href="#">Contact &rarr;</a>
    	</div>
	</div>
</form>
</body>
</html>

