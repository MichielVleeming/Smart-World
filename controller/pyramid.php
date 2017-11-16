<?php
include("../Model/dbase.php");
// Set array values to use later



$result = $sql->query("SELECT * FROM dataset2015");
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row);

$numbers = array ();
$SVG_paths = array ();
for ($x = 0; $x < count($set); $x++){
    $numbers[$x] = $set[$x]["Percentage"];
    $SVG_paths[$x] = $set[$x]["Pcodering"];
}
$sql->close();

?>