<?php 
session_start();
require_once '../classes/db/querymanager.php';

$q = new QueryManager();


echo $q->getPyramid();

for ($x = 0; $x < $set; $x++){
    	echo $numbers[$x];
    	echo $SVG_paths[$x] ;
    	echo $tooltip[$x] ;
	}