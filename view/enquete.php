<?php 
include '../includes/header.php';
require_once '../classes/db/querymanager.php';
session_start();
$stad = $_SESSION['city'];				

?>
<html>
<div class="container">
<?php
$q = new QueryManager();

	echo $q->getQuestions($stad);
	?>
</div>
<?php include '../includes/footer.php'; ?>
</html>
