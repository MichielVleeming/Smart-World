<?php

require_once '../classes/db/querymanager.php';
require_once '../classes/model/questionClass.php';

$q = new QueryManager();
session_start();
if($_GET['action']=='submitlogin'){
    $_SESSION['city'] = $_GET['login'];
    header('location:../view/index.php');
}