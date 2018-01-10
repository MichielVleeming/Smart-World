<?php
session_start(); 
include '../includes/header.php';
require_once '../classes/db/querymanager.php';		
$q = new QueryManager();
$stad = $_SESSION['city'];
$id = array();
$id = [41,42,43,44,45];
echo $q->getmodaliteit($stad, $id);    
//Get numbers, paths and tooltips for the graphs
    $numbers = $_SESSION["numbers"];
    $SVG_paths = $_SESSION["SVG_paths"];
    $tooltip = $_SESSION["tooltip"];
?>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>		
<div class="container">
<canvas id="myChart" responsive=True style="border: 1px solid rgba(0,0,255,0.6);"></canvas>
</br></br></br></br></br></br></br></br></br>
<canvas id="myChart2" responsive=True style="border: 1px solid rgba(0,0,255,0.5);"></canvas>
</br></br></br></br></br></br>
<script>
//Get variables into javascript
numbers = JSON.parse('<?php echo json_encode($numbers);?>');
SVG_paths = JSON.parse('<?php echo json_encode($SVG_paths);?>');
//Create first Graph

var ctx = document.getElementById('myChart').getContext('2d');
Chart.defaults.global.hover.mode = 'dataset';
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: SVG_paths,
    datasets: [{
      label: "My first",
      data: numbers,
      backgroundColor: "rgba(0,0,255,0.2)"
    }, 
    ]
  }, 
  options: {
    title: {
            display: true,
            text: 'De eerste grafiek'
        }

    }

});

var ctx = document.getElementById('myChart2').getContext('2d');
Chart.defaults.global.hover.mode = 'dataset';
var myChart = new Chart(ctx, {
  type: 'bar',
  labels: SVG_paths,
  data: {
    labels: SVG_paths,
    datasets: [{
      label: "My first",
      data: numbers,
      backgroundColor: "rgba(0,0,255,0.2)"
    }, 
    ]
  }, 
  options: {
    title: {
            display: true,
            text: 'Auto Monitor'
        }

    }

});
</script>
</div>
<?php include '../includes/footer.php'; ?>
</html>
