<?php
/*
	* 30-11-2017 Bart: Controleert of de sessie login bestaat, zo ja dan wordt deze gecontroleerd of die in de database voor komt
*/

if(!isset($_SESSION['login'])) {

die (header('Location: ../view/Login.php')); 

}

else {

   	if (isset($_SESSION['login'])) {
		$login = unserialize($_SESSION['login']);
		if ($login!=1||$login>1){
			session_destroy();
			die (header('Location: ../view/Login.php')); 
		} 
	}
}
?>