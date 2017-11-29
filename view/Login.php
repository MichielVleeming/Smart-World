<?php
            session_start();
?>

<html>
	<head>
		<meta charset="UTF-8">
			<title>Verkeersveiligheidmonitor</title>
		<link rel="stylesheet" href="css/style.css">
		<img src="http://www.nlingenieurs.nl/wp-content/uploads/2013/03/logo-Royal-HaskoningDHV.jpg"
	     alt="Mountain View" style="width:10%;height:10%;" align="right">
	</head>

<form method="get" action="../controller/loginController.php">
	<body>
  	<div class="login">
  	<h2>Log In</h2>
  		<fieldset>
    <input type="Gebruikersnaam" placeholder="Gebruikersnaam" />
  	<input type="Wachtwoord" placeholder="Wachtwoord" />
  		</fieldset>
  	<input type="submit" value="Log In" />
  		<div class="utilities">
    		<a href="#">Wachtwoord vergeten?</a>
    		<a href="#">Contact &rarr;</a>
  	</div>
		</div>
   
</body>
</html>
