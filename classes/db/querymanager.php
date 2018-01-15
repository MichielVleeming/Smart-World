<?php
require_once("dbase.php");
require_once("../classes/model/questionClass.php");
require_once("../classes/model/userClass.php");
class QueryManager {


	/*
	* 22-11-2017 Michiel: getQuestions toegevoegd om bla bla

	*/

	private $dbconn;
	
	public function QueryManager() {
		$this->dbconn = new MySQLConnection();
	}

	public function getPyramid($stad){

	$result = $this->dbconn->query("SELECT city FROM user WHERE NOT city = $stad");
	$y = 0;
	for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row){
		$city[$y] = $set[$y];
		$y++;
	}

	// Gegevens voor stad 1	
	$result = $this->dbconn->query("SELECT Percentage FROM dataset2015$city[0]");
	
	// Stad1 gegevens in een array zetten
	for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row){
		$cityPercentage1 = array();
	}

	// Gegevens voor stad 2
	$result = $this->dbconn->query("SELECT Percentage FROM dataset2015$city[1]");
	
	// Stad2 gegevens in een array zetten
	for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row){
		$cityPercentage2 = array();
	}

	// Gemiddelde van stad1 en stad2
	$i = 0;
	while ($i < length.$cityPercentage1){
		$gemiddelde[$i] = ($cityPercentage1[$i] + $cityPercentage2[$i]) / 2;
		$i++;
	}

	// Ophalen van gegevens met de huidige ingelogden stad
	$result = $this->dbconn->query("SELECT * FROM dataset2015$stad");

	// Gegevens uit de database in array zetten van de huidige ingelogden stad
	for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
		$numbers = array();
		$SVG_paths = array();

	// De huidige ingelogden stad vergelijken met het gemiddelde van de overige steden
	$x = 0;	
	while ($x < length.$numbers){
		$numbers[$x] = ($numbers[$x] / $gemiddelde[$x]) * 100;
		$x++;
	}


	for ($a = 0; $a < count($set); $a++){
    	$SVG_paths[$a] = $set[$a]["Pcodering"];
	}

	
	$result = $this->dbconn->query("SELECT * FROM tooltip");
	for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
		$tooltip = array();
	for ($x = 0; $x < count($set); $x++){
		$tooltip[$x] = $set[$x]["Tooltip"];	
	}
	$_SESSION["numbers"] = $numbers;
	$_SESSION["SVG_paths"] = $SVG_paths;
	$_SESSION["tooltip"] = $tooltip; 
	}

	public function getbike($stad){
		$result = $this->dbconn->query("SELECT * FROM dataset2015$stad WHERE id in (50,51,52,53,54)");
		for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
			$numbers = array();
			$SVG_paths = array();
	
		for ($x = 0; $x < count($set); $x++){
			$numbers[$x] = $set[$x]["Percentage"];
			$SVG_paths[$x] = $set[$x]["Pcodering"];
		}
	
		
		$result = $this->dbconn->query("SELECT * FROM tooltip");
		for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
			$tooltip = array();
		for ($x = 0; $x < count($set); $x++){
			$tooltip[$x] = $set[$x]["Tooltip"];	
		}
		$_SESSION["numbers"] = $numbers;
		$_SESSION["SVG_paths"] = $SVG_paths;
		$_SESSION["tooltip"] = $tooltip; 
	}

	public function getcar($stad){
		$result = $this->dbconn->query("SELECT * FROM dataset2015$stad WHERE id in (4,5,6,7,8)");
		for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
			$numbers = array();
			$SVG_paths = array();
	
		for ($x = 0; $x < count($set); $x++){
			$numbers[$x] = $set[$x]["Percentage"];
			$SVG_paths[$x] = $set[$x]["Pcodering"];
		}
	
		
		$result = $this->dbconn->query("SELECT * FROM tooltip");
		for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
			$tooltip = array();
		for ($x = 0; $x < count($set); $x++){
			$tooltip[$x] = $set[$x]["Tooltip"];	
		}
		$_SESSION["numbers"] = $numbers;
		$_SESSION["SVG_paths"] = $SVG_paths;
		$_SESSION["tooltip"] = $tooltip; 
	}

	public function getModaliteit($stad, $id){
		$result = $this->dbconn->query("SELECT * FROM dataset2015$stad WHERE id in (".implode(',', $id).")");
		for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
			$numbers = array();
			$SVG_paths = array();
	
		for ($x = 0; $x < count($set); $x++){
			$numbers[$x] = $set[$x]["Percentage"];
			$SVG_paths[$x] = $set[$x]["Pcodering"];
		}
		
		$result = $this->dbconn->query("SELECT * FROM tooltip");
		for ($set = array(); $row = $result->fetch_assoc(); $set[] = $row);
			$tooltip = array();
		for ($x = 0; $x < count($set); $x++){
			$tooltip[$x] = $set[$x]["Tooltip"];	
		}
		$_SESSION["numbers"] = $numbers;
		$_SESSION["SVG_paths"] = $SVG_paths;
		$_SESSION["tooltip"] = $tooltip; 
	}
			

	public function getQuestions($stad){
	$result = $this->dbconn->query("SELECT * FROM enquete");
	echo '<form method="get" action="../controller/
	.php">';
	$x=0;
	while($row = $result->fetch_assoc()) {
			echo '<tr><td><input type="text" value="" name="answer'.$x.'" required/></td></tr>'
			. '<td>' . $row["text"] . '</td></tr><br><br>';
			echo '<tr><td><input type="hidden" value='.$row["Pcodering"].' name="id'.$x.'" required/></td></tr>';
			echo '<tr><td><input type="hidden" value='.$stad.' name="stad"  required/></td></tr>';
			$x++;
		}
		echo '<tr><td><input type="hidden" value="submitanswers" name="action"  required/></td></tr>';
		echo '<tr><td><input type="hidden" value='.$x.' name="no"  required/></td></tr>';	
		echo '<tr><td><input type="submit" value="submit"</td></tr>';
		echo '</table>';
		echo '</form>';
	}

	public function saveAnswer($answer, $pCodering , $count, $stad){
		for($x=0;$x<$count;$x++){
		$this->dbconn->query("UPDATE dataset2015$stad SET Percentage=$answer[$x] WHERE Pcodering='$pCodering[$x]'");
		}
	}

	/*
		* 30-11-2017 Bart: Telt de rijen in de database waar de inlog gegevens van kloppen en stuurt dit getal terug
	*/
	public function loginUser($username, $password) {
    	$result = $this->dbconn->query("SELECT * FROM user WHERE username ='$username' AND password = '$password'");
	 	$row = mysqli_num_rows($result);
	return $row;
    }
}
?>