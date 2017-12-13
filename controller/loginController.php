<?php

require_once '../classes/db/querymanager.php';
require_once '../classes/model/questionClass.php';
require_once '../classes/model/userClass.php';

$q = new QueryManager();
session_start();

/*
	* 30-11-2017 Bart: Controleert de gegevens die de gebruiker heeft ingevuld en stuurt ze door naar querymanager.php

*/
if (isset($_POST['username']) && isset($_POST['password'])&&($_POST['action']=='login')) {
	$username = $_POST['username']; 
	$password = $_POST['password'];
	$_SESSION['city'] = $_POST['city'];
    $login = $q->loginUser($username, $password);
	$_SESSION['login'] = serialize($login);
	header('Location: ../view/index.php'); 		
}

/*
	* 30-11-2017 Bart: Kijkt of de gebruiker de logout knop heeft geklikt en beindigt de huidige login sessie 
*/
if ($_GET['action']=='logout'){
	session_start();
	session_destroy();	
    header('Location: ../view/Login.php');
}