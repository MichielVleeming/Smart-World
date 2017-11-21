<?php 
require_once '../classes/db/querymanager.php';
				
	$q = new QueryManager();

	echo $q->getQuestions();

?>






<form method="post" action="controller.php">
	<p>Vraag 1?</p>
	<input name="antwoord1" type="text" placeholder="Antwoord">
	<input name="antwoord2" type="text" placeholder="Antwoord">
	<input name="antwoord3" type="text" placeholder="Antwoord">
	<input name="antwoord4" type="text" placeholder="Antwoord">

	<p>Vraag 2?</p>
	<input name="antwoord5" type="text" placeholder="Antwoord">
	<input name="antwoord6" type="text" placeholder="Antwoord">
	<input name="antwoord7" type="text" placeholder="Antwoord">
	<input name="antwoord8" type="text" placeholder="Antwoord">

	<p>Vraag 3?</p>
	<input name="antwoord9" type="text" placeholder="Antwoord">
	<input name="antwoord10" type="text" placeholder="Antwoord">
	<input name="antwoord11" type="text" placeholder="Antwoord">
	<input name="antwoord12" type="text" placeholder="Antwoord">

	<input name="submit" type="submit" value="submit">
</form>