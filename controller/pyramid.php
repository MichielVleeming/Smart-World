<?php 
session_start();
require_once '../classes/db/querymanager.php';
require_once '../classes/model/pyramidClass.php';

$q = new QueryManager();

echo $q->getPyramid();

