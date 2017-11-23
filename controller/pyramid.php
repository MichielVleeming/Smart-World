<?php 
session_start();
require_once '../classes/db/querymanager.php';
require_once '../classes/model/pyramidClass.php';
session_start();
$q = new QueryManager();
$stad = $_SESSION["stad"];
echo $q->getPyramid($stad);

