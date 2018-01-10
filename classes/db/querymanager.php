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
	$result = $this->dbconn->query("SELECT * FROM dataset2015$stad");
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
	echo '<form method="get" action="../controller/questionController.php">';
	$x=0;
	while($row = $result->fetch_assoc()) {
		if ($row["type"] == 'text'){
			echo '<tr><td>'. $row["text"] . '<br><br><input type='.$row["type"].' value="" name="answer'.$x.'" required/></td></tr></td></tr><br><br>';
			echo '<tr><td><input type="hidden" value='.$row["Pcodering"].' name="id'.$x.'" required/></td></tr>';
			echo '<tr><td><input type="hidden" value='.$stad.' name="stad"  required/></td></tr>';
			$x++;
		}
		if ($row["type"] == 'perc'){
			echo '<tr><td>'. $row["text"] . '<br><br>0&nbsp; &nbsp; <input type="range" list="tickmarks" name="answer'.$x.'" required/></td>&nbsp; &nbsp; 100</tr></td></tr><br><br>';
			echo '<datalist id="tickmarks">
			<option value="0">
			<option value="10">
			<option value="20">
			<option value="30">
			<option value="40">
			<option value="50">
			<option value="60">
			<option value="70">
			<option value="80">
			<option value="90">
			<option value="100">
		  </datalist>';
			echo '<tr><td><input type="hidden" value='.$row["Pcodering"].' name="id'.$x.'" required/></td></tr>';
			echo '<tr><td><input type="hidden" value='.$stad.' name="stad"  required/></td></tr>';
			$x++;
		}
		else if ($row["type"] == 'radio'){
			echo '<tr><td>'. $row["text"] . '<br><br>
			<input type='.$row["type"].' value='.$row["value1"].' name="answer'.$x.'" required/>'.$row["value1"].'</td></tr><td></td></tr><br><br>
			<input type='.$row["type"].' value='.$row["value2"].' name="answer'.$x.'" required/>'.$row["value2"].'</td></tr><td></td></tr><br><br>';
			echo '<tr><td><input type="hidden" value='.$row["Pcodering"].' name="id'.$x.'" required/></td></tr>';
			echo '<tr><td><input type="hidden" value='.$stad.' name="stad"  required/></td></tr>';
			$x++;
		}
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
		while($res = $result->fetch_assoc()) {
			$city = $res['city'];
		}
		$row = mysqli_num_rows($result);
		 $_SESSION["city"] = $city;
		 return $row;
    }
}


?>
