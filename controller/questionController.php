<?php

require_once '../classes/db/querymanager.php';
require_once '../classes/model/questionClass.php';

$q = new QueryManager();

if($_GET['action']=='submitanswers'){
    $count = $_GET["no"];
    $answer = array();
    $pCodering = array();
    for($x=0; $x<$count;$x++){
        $answer[$x] = $_GET["answer$x"];
        $pCodering[$x] = $_GET["id$x"];
        $stad = $_GET["stad"];
    }
    $q->saveAnswer($answer, $pCodering , $count, $stad);
    header('location:../view/monitor.php');
}