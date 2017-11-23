<?php
session_start(); 
include '../includes/include.php';
require_once '../classes/db/querymanager.php';		
$q = new QueryManager();
$stad = $_SESSION['city'];
    echo $q->getPyramid($stad);
    $numbers = $_SESSION["numbers"];
    $SVG_paths = $_SESSION["SVG_paths"];
    $tooltip = $_SESSION["tooltip"];
?>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>		
<body2>
<canvas id="myChart" responsive=True></canvas>
<script>
numbers = JSON.parse('<?php echo json_encode($numbers);?>');
SVG_paths = JSON.parse('<?php echo json_encode($SVG_paths);?>');

var ctx = document.getElementById('myChart').getContext('2d');
Chart.defaults.global.hover.mode = 'dataset';
var myChart = new Chart(ctx, {
  type: 'bar',
  labels: SVG_paths,
  data: {
    labels: SVG_paths,
    datasets: [{
      data: numbers,
      backgroundColor: "rgba(0,0,255,0.2)"
    }, 
    ]
  }, 
  options: {
    legend: {
        labels: {
            // This more specific font property overrides the global property
            fontColor: 'black'
        }
    }}

});
</script>
</body2>
</html>
