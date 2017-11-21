<?php
require_once("dbase.php");
require_once("../classes/model/questionClass.php");

class QueryManager {

	private $dbconn;
	
	public function QueryManager() {
		$this->dbconn = new MySQLConnection();
	}
	
	/* UC4
	 * ??/?/2017 Kevin: Find the first questionId that corresponds with the set cornerstoneId
	 * 07/3/2017 Kevin: changed the name from "findFirstQuestionId" to "getFirstQuestionId" to be in line with the other queries.
	 */
	public function getFirstQuestionId($cornerstoneId) {
		$result = $this->dbconn->query("SELECT question.id, question.text FROM question INNER JOIN answer ON question.id=answer.questionId WHERE answer.cornerstone='$cornerstoneId' LIMIT 1");
		$row = mysqli_fetch_array($result);
		
		return $row[0];
	}

	public function getPyramid(){
	$result = $this->dbconn->query("SELECT * FROM dataset2015");
	for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
	$numbers = array();
	$SVG_paths = array();
	$tooltip = array();
	for ($x = 0; $x < count($set); $x++){
    	$numbers[$x] = $set[$x]["Percentage"];
    	$SVG_paths[$x] = $set[$x]["Pcodering"];
    	$tooltip[$x] = $set[$x]["Tooltip"];
    	return $numbers[$x];
    	return $SVG_paths[$x];
    	return $tooltip[$x];
	}
	return $set;
	}

	public function getQuestions($id,$pcodering,$text){
	$result = $this->dbconn->query("SELECT * FROM enquete");
	while($row = $result->fetch_assoc()) {
			echo '<tr><td><input type="radio" value="' . $row["ID"] . '" name="answer" required/></td>' . '<td>' . $row["text"] . '</td></tr>';
		}
		echo '</table>';	
	}


}
	?>