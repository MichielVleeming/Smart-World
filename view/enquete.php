<?php 
include '../includes/include.php';
require_once '../classes/db/querymanager.php';
				

?>
<html>
<div class="container">
<?php
$q = new QueryManager();

	echo $q->getQuestions();
	?>
</div>
<?php include '../includes/footer.php'; ?>
</html>
