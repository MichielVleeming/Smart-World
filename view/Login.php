<?php
            session_start();
?>

<html>
<title>Login</title>
<img src="http://www.nlingenieurs.nl/wp-content/uploads/2013/03/logo-Royal-HaskoningDHV.jpg"
     alt="Mountain View" style="width:10%;height:10%;" align="right">

<h2>Dit is het startscherm voor het prototype <br>
van de Verkeersveiligheidmonitor.</h2>
<form method="get" action="../controller/loginController.php">
	<input type="text" name="login" >
	<input type="hidden" value="submitlogin" name="action">
	<input name="submit" type="submit" value="submit">
</form>


</html>