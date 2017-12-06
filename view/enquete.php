<?php 
include '../includes/include.php';
require_once '../classes/db/querymanager.php';
session_start();
$stad = $_SESSION['city'];				

?>
<html>
<body2>
<?php
$q = new QueryManager();

	echo $q->getQuestions($stad);
	?>
</body2>
</html>
