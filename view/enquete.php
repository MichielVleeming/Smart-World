<?php 
include '../includes/include.php';
require_once '../classes/db/querymanager.php';
				

?>
<html>
<body2>
<?php
$q = new QueryManager();

	echo $q->getQuestions();
	?>
</body2>
</html>
