<<<<<<< HEAD

<html>
<?php 
include "../Controller/pyramid.php"; 
include '../includes/header.php';   
$y = 0;
?>
<head>
<script src="https://d3js.org/d3.v4.js"></script>
</head>

<body2>
<nav class="pyramid">
=======
<?php 
include("../Controller/pyramid.php"); 
include '../includes/header.php';     
?>

<script src="https://d3js.org/d3.v4.js"></script>
<html>
<body>
>>>>>>> master
</form>
<body onload="color()">
<script>
// Echo the arrays in JSON.parse so that it can be used in Javascript
numbers = JSON.parse('<?php echo json_encode($numbers);?>');
SVG_paths = JSON.parse('<?php echo json_encode($SVG_paths);?>');

//Set color ranges from Red to Yellow to Green ( -5 , 0 , 5 )
var colour = d3.scaleLinear()
    .domain([-5 , 0 , 5 ])
    .range(["#d80202", "#ffff1a", "#00ff00"]);
//Create a function to fill in all pyramid blocks
var setColor = ""
function color() {
    for(var i= 0; i < SVG_paths.length; i++){
if (numbers[i] == "NULL"){
    setColor = "lightGray";
}else{
    setColor = colour(numbers[i])
}

d3.select(SVG_paths[i]).style("fill", setColor);
    }
}
function clickF(id) {
    window.location.assign('http://google.com/');
}

</script>
<<<<<<< HEAD
 <?php include '../includes/modaliteitsmenu.php'?>


<?xml version="1.0" encoding="UTF-8" standalone="no"?>
 <svg
    xmlns:osb="http://www.openswatchbook.org/uri/2009/osb"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:cc="http://creativecommons.org/ns#"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:svg="http://www.w3.org/2000/svg"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
    width="130mm"
    height="145mm"
    viewBox="0 0 210 297"
    version="1.1"
    id="svg178"
    inkscape:version="0.92.2 (5c3e80d, 2017-08-06)"
    sodipodi:docname="pyramid.svg">
   <defs
      id="defs172">
     <linearGradient
        id="linearGradient5199"
        osb:paint="solid">
       <stop
          style="stop-color:#000000;stop-opacity:1;"
          offset="0"
          id="stop5197" />
     </linearGradient>
   </defs>
   <sodipodi:namedview
      id="base"
      pagecolor="#ffffff"
      bordercolor="#666666"
      borderopacity="1.0"
      inkscape:pageopacity="0.0"
      inkscape:pageshadow="2"
      inkscape:zoom="3.7523863"
      inkscape:cx="470.61967"
      inkscape:cy="427.13201"
      inkscape:document-units="mm"
      inkscape:current-layer="layer1"
      showgrid="false"
      inkscape:window-x="-9"
      inkscape:window-y="-9"
      inkscape:window-maximized="1"
      inkscape:window-width="1920"
      inkscape:window-height="1001" />
   <metadata
      id="metadata175">
     <rdf:RDF>
       <cc:Work
          rdf:about="">
         <dc:format>image/svg+xml</dc:format>
         <dc:type
            rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
         <dc:title />
       </cc:Work>
     </rdf:RDF>
   </metadata>
   <g
      inkscape:label="Laag 1"
      inkscape:groupmode="layer"
      id="layer1">
     <path
        style="fill:#ff0000;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="M 74.258754,0.59215621 49.433291,58.261917 h 49.650935 z"
        id="T101"
        onclick="clickF(T101)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1100">
       <title
          id="title336">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 46.670623,67.000837 -1.631902,3.89183 h 58.643529 l -1.61857,-3.859541 z"
        id="T102"
        onclick="clickF(T102)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1102">
       <title
          id="title339">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 45.2044,71.460237 -1.550732,3.697764 H 105.3541 l -1.58612,-3.782126 z"
        id="T103"
        onclick="clickF(T103)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1104">
       <title
          id="title342">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 43.768809,75.813305 -1.573124,3.75114 h 64.902945 l -1.58174,-3.771687 z"
        id="T104"
        onclick="clickF(T104)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1106">
       <title
          id="title345">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 42.443097,80.197658 -1.593356,3.785691 h 23.823204 l 0.591082,-3.856454 z"
        id="L101"
        onclick="clickF(L101)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1108">
       <title
          id="title348">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 63.703615,88.222024 0.708714,-3.690091 H 40.688632 l -1.47194,3.777668 z"
        id="L102"
        onclick="clickF(L102)"
        inkscape:connector-curvature="0">
       <title
          id="title351">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 62.822266,92.68767 0.754144,-3.777662 -24.60504,-0.006 -1.449683,3.756597 z"
        id="L103"
        onclick="clickF(L103)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1394">
       <title
          id="title354">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 61.987375,97.038639 0.770976,-3.750294 H 37.25827 l -1.464855,3.741471 z"
        id="L104"
        onclick="clickF(L104)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1392">
       <title
          id="title357">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 61.116811,101.39926 0.751705,-3.843171 H 35.555695 l -1.500192,3.807801 z"
        id="L105"
        onclick="clickF(L105)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1390">
       <title
          id="title360">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 61.036859,101.91917 -0.74506,3.86521 H 32.336277 l 1.494655,-3.8746 z"
        id="L106"
        onclick="clickF(L106)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1388">
       <title
          id="title363">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 59.487685,110.09991 0.70871,-3.8527 H 32.118422 l -1.519854,3.87773 z"
        id="L107"
        onclick="clickF(L107)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1386">
       <title
          id="title366">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 58.633625,114.51649 0.690512,-3.86619 H 30.358025 l -1.503409,3.83079 z"
        id="L108"
        onclick="clickF(L108)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1384">
       <title
          id="title369">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 56.070122,127.59831 0.732428,-3.86528 H 25.169648 l -1.435597,3.75411 z"
        id="L201"
        onclick="clickF(L201)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1382">
       <title
          id="title372">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 55.189979,131.85271 0.772317,-3.75264 H 23.5069 l -1.557992,3.71506 z"
        id="L202"
        onclick="clickF(L202)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1380">
       <title
          id="title375">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 55.09912,132.44063 -0.772316,3.8527 H 20.238943 l 1.496982,-3.8833 z"
        id="L203"
        onclick="clickF(L203)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1378">
       <title
          id="title378">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 54.264748,136.85909 c -0.01284,0.0707 -0.783826,3.75031 -0.783826,3.75031 h -34.93813 l 1.503406,-3.89183 z"
        id="L204"
        onclick="clickF(L204)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1376">
       <title
          id="title381">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 52.7004,144.98694 0.699625,-3.82768 H 18.336937 l -1.548302,3.69194 z"
        id="L205"
        onclick="clickF(L205)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1374">
       <title
          id="title384">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 15.064339,149.19071 h 36.735429 l 0.7491,-3.87149 -35.939901,-0.006 z"
        id="L206"
        onclick="clickF(L206)"
        inkscape:connector-curvature="0">
       <title
          id="title387">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 14.847888,149.7653 -1.499196,3.9403 37.626553,-0.0497 0.738855,-3.77684 z"
        id="L207"
        onclick="clickF(L207)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1370">
       <title
          id="title390">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 13.121536,154.1434 -1.544626,3.90275 38.569537,0.0151 0.738851,-3.81221 z"
        id="L208"
        onclick="clickF(L208)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1368">
       <title
          id="title393">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 7.9697413,167.24012 -1.5082841,3.84019 H 47.595794 l 0.723499,-3.71728 z"
        id="L301"
        onclick="clickF(L301)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1366">
       <title
          id="title396">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 6.2252224,171.6557 -1.4719417,3.75266 H 46.739946 l 0.745059,-3.70262 z"
        id="L302"
        onclick="clickF(L302)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1364">
       <title
          id="title399">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 4.5715613,175.93373 -1.5537192,3.87772 H 45.886793 l 0.737406,-3.78872 z"
        id="L303"
        onclick="clickF(L303)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1362">
       <title
          id="title402">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 2.8277026,180.2883 -1.5907268,3.87622 H 45.019444 l 0.735719,-3.78007 z"
        id="L304"
        onclick="clickF(L304)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1360">
       <title
          id="title405">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 1.048029,184.6843 -1.52268025,3.8476 H 44.190641 l 0.723672,-3.71813 z"
        id="L305"
        onclick="clickF(L305)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1358">
       <title
          id="title408">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m -0.71879362,189.0803 -1.47770638,3.73261 45.547349,0.13284 0.708713,-3.80267 z"
        id="L306"
        onclick="clickF(L306)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1356">
       <title
          id="title411">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m -3.9055017,197.2885 1.4777076,-3.85643 45.6332661,0.064 -0.704172,3.78392 z"
        id="L307"
        onclick="clickF(L307)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1354">
       <title
          id="title414">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="M 41.624498,201.65182 42.4059,197.84914 H -4.1692299 l -1.4709715,3.76461 z"
        id="L308"
        onclick="clickF(L308)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1350">
       <title
          id="title417">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 41.56932,202.17098 -0.770977,3.92721 H -7.4038632 l 1.7063096,-4.06874 z"
        id="L309"
        onclick="clickF(L309)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1330">
       <title
          id="title420">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="M -9.1847307,210.28289 H 39.873168 l 0.822379,-3.70708 H -7.6764466 Z"
        id="L310"
        onclick="clickF(L310)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1328">
       <title
          id="title423">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.31892204px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 37.440292,223.31051 0.655061,-3.77416 h -50.892449 l -1.328836,3.77416 z"
        id="L401"
        onclick="clickF(L401)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-3-2-5">
       <title
          id="title426">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.32209435px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 36.647394,227.70381 0.668161,-3.77416 h -51.909964 l -1.355402,3.77416 z"
        id="L402"
        onclick="clickF(L402)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-1-6">
       <title
          id="title429">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.32477546px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 35.849089,231.97833 0.679331,-3.77416 h -52.77773 l -1.378063,3.77416 z"
        id="L403"
        onclick="clickF(L403)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-3-0">
       <title
          id="title432">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.32836854px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 35.030203,236.37163 0.694442,-3.77414 h -53.951978 l -1.408721,3.77414 z"
        id="L404"
        onclick="clickF(L404)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-2">
       <title
          id="title435">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33024871px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 33.970796,240.88879 0.702417,-3.77418 h -54.571575 l -1.4249,3.77418 z"
        id="L405"
        onclick="clickF(L405)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-3-2">
       <title
          id="title438">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33264703px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 33.135702,245.2821 0.712658,-3.77417 h -55.367079 l -1.445672,3.77417 z"
        id="L406"
        onclick="clickF(L406)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-1">
       <title
          id="title441">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33528641px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 32.291734,249.5566 0.724012,-3.77414 h -56.249185 l -1.468705,3.77414 z"
        id="L407"
        onclick="clickF(L407)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-3">
       <title
          id="title444">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 31.430966,253.94991 0.734568,-3.77415 h -57.069143 l -1.490113,3.77415 z"
        id="L408"
        onclick="clickF(L408)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204">
       <title
          id="title447">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 80.621841,80.166358 0.527006,3.752652 -12.847691,-0.07502 0.3271,-3.67759 z"
        id="M101"
        onclick="clickF(M101)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1588">
       <title
          id="title450">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 81.348725,84.544438 0.363447,3.677586 -14.047039,0.04999 0.472484,-3.677589 z"
        id="M102"
        onclick="clickF(M102)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1586">
       <title
          id="title453">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 81.839382,89.022587 c 0.05454,0.350248 0.327098,3.502464 0.327098,3.502464 l -14.991986,0.04999 0.363434,-3.677591 z"
        id="M103"
        onclick="clickF(M103)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1584">
       <title
          id="title456">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 66.992766,93.200535 -0.39978,3.677592 15.991455,0.04999 -0.272595,-3.602534 z"
        id="M104"
        onclick="clickF(M104)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1582">
       <title
          id="title459">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 66.647499,97.628652 -0.399792,3.452438 16.809197,0.0751 -0.363427,-3.502475 z"
        id="M105"
        onclick="clickF(M105)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1580">
       <title
          id="title462">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 66.156848,102.00673 -0.545158,3.75263 c 0,0 18.372005,-0.05 18.22663,-0.12504 -0.145394,-0.0751 -0.599683,-3.65257 -0.599683,-3.65257 z"
        id="M106"
        onclick="clickF(M106)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1578">
       <title
          id="title465">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 65.448136,106.33477 -0.545161,3.42741 19.49867,0.25018 -0.41795,-3.70259 z"
        id="M107"
        onclick="clickF(M107)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1576">
       <title
          id="title468">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 64.77577,110.68783 -0.472476,3.75265 20.825235,-0.0499 -0.41795,-3.70261 H 64.684908 Z"
        id="M108"
        onclick="clickF(M108)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1574">
       <title
          id="title471">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 62.904042,123.722 -0.454303,3.80267 24.586865,-0.0751 -0.545169,-3.67758 z"
        id="M201"
        onclick="clickF(M201)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1572">
       <title
          id="title474">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 62.286189,128.22516 -0.399783,3.50247 25.604507,0.15011 -0.399786,-3.82771 z"
        id="M202"
        onclick="clickF(M202)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1570">
       <title
          id="title477">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 61.777369,132.67831 -0.363441,3.55248 26.531294,-0.12505 -0.308925,-3.67757 z"
        id="M203"
        onclick="clickF(M203)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1568">
       <title
          id="title480">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 61.177692,136.90627 -0.545165,3.62755 h 27.985046 l -0.399776,-3.62755 z"
        id="M204"
        onclick="clickF(M204)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1566">
       <title
          id="title483">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 60.541667,141.18429 -0.381613,3.80265 29.057212,-0.1 -0.436134,-3.67759 z"
        id="M205"
        onclick="clickF(M205)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1564">
       <title
          id="title486">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 60.123708,145.66243 -0.581506,3.62755 h 30.329261 l -0.508832,-3.72763 z"
        id="M206"
        onclick="clickF(M206)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1562">
       <title
          id="title489">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 59.414995,150.06553 -0.29075,3.62756 31.165167,-0.0751 -0.363447,-3.65258 z"
        id="M207"
        onclick="clickF(M207)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1560">
       <title
          id="title492">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 59.124245,154.26847 -0.417962,3.85271 31.855715,-0.0499 -0.327099,-3.75263 z"
        id="M208"
        onclick="clickF(M208)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1558">
       <title
          id="title495">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 57.198,167.35269 -0.363443,3.67759 35.657811,-0.0471 -0.295536,-3.62646 z"
        id="M301"
        onclick="clickF(M301)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1556">
       <title
          id="title498">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 56.580146,171.80582 -0.327098,3.5525 36.898474,0.0375 -0.318011,-3.71511 z"
        id="M302"
        onclick="clickF(M302)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1554">
       <title
          id="title501">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 56.089396,176.07806 -0.385491,3.67954 37.965526,-0.0963 -0.308924,-3.50245 z"
        id="M303"
        onclick="clickF(M303)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1552">
       <title
          id="title504">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 93.96018,183.98939 -0.272576,-3.45243 -38.034234,-0.075 -0.41796,3.37737 z"
        id="M304"
        onclick="clickF(M304)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1550">
       <title
          id="title507">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 94.014693,184.83998 0.608771,3.56501 -39.947525,0.0385 0.526832,-3.76799 z"
        id="M305"
        onclick="clickF(M305)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1548">
       <title
          id="title510">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 94.768838,189.118 0.499734,3.75265 -41.09623,0.0377 0.408872,-3.72763 z"
        id="M306"
        onclick="clickF(M306)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1546">
       <title
          id="title513">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 95.89754,197.2885 -0.4883,-3.76798 H 53.943507 l -0.488285,3.64416 z"
        id="M307"
        onclick="clickF(M307)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1544">
       <title
          id="title516">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 95.910379,197.83691 0.39833,3.82106 -43.296795,-0.0265 0.366214,-3.75914 z"
        id="M308"
        onclick="clickF(M308)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1542">
       <title
          id="title519">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 52.963896,202.30227 -0.545163,3.50247 44.59437,0.025 -0.672376,-3.62754 z"
        id="M309"
        onclick="clickF(M309)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1536">
       <title
          id="title522">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 52.291527,206.53024 -0.545163,3.80268 45.811893,-0.10011 -0.508824,-3.7026 z"
        id="M310"
        onclick="clickF(M310)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1534">
       <title
          id="title525">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 50.474314,219.71453 -0.581507,3.52746 49.555343,0.10011 -0.508799,-3.75265 z"
        id="M401"
        onclick="clickF(M401)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1532">
       <title
          id="title528">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 49.892807,224.11761 -0.61785,3.50246 50.785853,0.0602 -0.578229,-3.71494 z"
        id="M402"
        onclick="clickF(M402)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1530">
       <title
          id="title531">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 49.347647,228.42065 -0.636025,3.57751 51.681488,-0.0251 -0.454314,-3.62753 z"
        id="M403"
        onclick="clickF(M403)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1528">
       <title
          id="title534">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 48.675277,232.59856 -0.508821,3.62755 h 52.917184 l -0.49064,-3.40239 z"
        id="M404"
        onclick="clickF(M404)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1520">
       <title
          id="title537">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 48.166456,237.12677 -0.490647,3.75267 54.007521,0.0376 -0.49973,-3.75266 z"
        id="M405"
        onclick="clickF(M405)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1516">
       <title
          id="title540">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 47.530434,241.47983 -0.490648,3.55251 55.061504,0.075 -0.36344,-3.62755 z"
        id="M406"
        onclick="clickF(M406)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1518">
       <title
          id="title543">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 47.094658,245.81247 -0.481862,3.70611 56.005104,-0.11497 -0.3855,-3.66185 z"
        id="M407"
        onclick="clickF(M407)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1514">
       <title
          id="title546">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 46.131179,253.83854 0.436132,-3.85275 h 56.260859 l 0.43613,3.85275 z"
        id="M408"
        onclick="clickF(M408)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1512">
       <title
          id="title549">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 107.28033,80.565143 1.59337,3.785691 H 85.050476 L 84.459413,80.49438 Z"
        id="R101"
        onclick="clickF(R101)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1108-4">
       <title
          id="title552">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="M 86.019818,88.589503 85.311099,84.899415 H 109.0348 l 1.47194,3.777665 z"
        id="R102"
        onclick="clickF(R102)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1396-1">
       <title
          id="title555">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 86.901172,93.05515 -0.754154,-3.777654 24.605042,-0.006 1.44967,3.756596 z"
        id="R103"
        onclick="clickF(R103)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1394-0">
       <title
          id="title558">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 87.736059,97.406127 -0.770967,-3.750303 h 25.500068 l 1.46487,3.741471 z"
        id="R104"
        onclick="clickF(R104)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1392-8">
       <title
          id="title561">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 88.606625,101.76674 -0.751708,-3.843171 h 26.312823 l 1.50021,3.807801 z"
        id="R105"
        onclick="clickF(R105)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1390-9">
       <title
          id="title564">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 88.686567,102.28664 0.745068,3.86522 h 27.955525 l -1.49467,-3.87459 z"
        id="R106"
        onclick="clickF(R106)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1388-1">
       <title
          id="title567">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 90.235756,110.46741 -0.708729,-3.85272 h 28.077983 l 1.51985,3.87773 z"
        id="R107"
        onclick="clickF(R107)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1386-8">
       <title
          id="title570">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 91.08981,114.88397 -0.690505,-3.86619 h 28.966105 l 1.50341,3.83079 z"
        id="R108"
        onclick="clickF(R108)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1384-6">
       <title
          id="title573">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 93.653307,127.9658 -0.732428,-3.86529 h 31.632911 l 1.43559,3.75411 z"
        id="R201"
        onclick="clickF(R201)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1382-1">
       <title
          id="title576">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 94.533458,132.2202 -0.77232,-3.75263 h 32.455382 l 1.558,3.71504 z"
        id="R202"
        onclick="clickF(R202)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1380-9">
       <title
          id="title579">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 94.62432,132.80811 0.772309,3.8527 H 129.4845 l -1.497,-3.88329 z"
        id="R203"
        onclick="clickF(R203)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1378-6">
       <title
          id="title582">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 95.458687,137.22657 c 0.01284,0.0707 0.78381,3.75031 0.78381,3.75031 h 34.938143 l -1.50341,-3.89183 z"
        id="R204"
        onclick="clickF(R204)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1376-1">
       <title
          id="title585">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 97.023029,145.35443 -0.69963,-3.82768 h 35.063111 l 1.54828,3.69193 z"
        id="R205"
        onclick="clickF(R205)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1374-8">
       <title
          id="title588">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 133.10377,145.81727 1.54462,3.87773 H 97.912954 l -0.749088,-3.87149 c 0,0 35.986964,0.0577 35.939904,-0.006 z"
        id="R206"
        onclick="clickF(R206)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1372-0">
       <title
          id="title591">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 134.87552,150.13279 1.49921,3.94029 -37.626535,-0.0497 -0.738863,-3.77684 z"
        id="R207"
        onclick="clickF(R207)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1370-1">
       <title
          id="title594">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 136.60189,154.51088 1.54462,3.90275 -38.569526,0.0151 -0.73885,-3.81219 z"
        id="R208"
        onclick="clickF(R208)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1368-6">
       <title
          id="title597">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 141.75368,167.6076 1.50829,3.8402 h -41.13433 l -0.7235,-3.71729 z"
        id="R301"
        onclick="clickF(R301)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1366-0">
       <title
          id="title600">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 143.49819,172.02318 1.47195,3.75266 h -41.98666 l -0.74506,-3.70262 z"
        id="R302"
        onclick="clickF(R302)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1364-5">
       <title
          id="title603">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 145.15187,176.30122 1.55371,3.87771 h -42.86894 l -0.73741,-3.78871 z"
        id="R303"
        onclick="clickF(R303)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1362-1">
       <title
          id="title606">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 146.89572,180.65579 1.59074,3.87621 h -43.78248 l -0.73571,-3.78006 z"
        id="R304"
        onclick="clickF(R304)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1360-6">
       <title
          id="title609">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 148.67539,185.05178 1.52268,3.8476 h -44.66528 l -0.72366,-3.71813 z"
        id="R305"
        onclick="clickF(R305)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1358-0">
       <title
          id="title612">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 150.44222,189.44779 1.4777,3.7326 -45.54733,0.13284 -0.70873,-3.80267 z"
        id="R306"
        onclick="clickF(R306)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1356-8">
       <title
          id="title615">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 153.62891,197.65598 -1.47769,-3.85642 -45.63327,0.064 0.70418,3.78391 z"
        id="R307"
        onclick="clickF(R307)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1354-5">
       <title
          id="title618">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 108.09893,202.0193 -0.7814,-3.80268 h 46.57513 l 1.47095,3.76461 z"
        id="R308"
        onclick="clickF(R308)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1350-1">
       <title
          id="title621">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 108.15412,202.53846 0.77097,3.92721 h 48.2022 l -1.70632,-4.06872 z"
        id="R309"
        onclick="clickF(R309)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1330-4">
       <title
          id="title624">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 158.90815,210.65036 h -49.05789 l -0.82237,-3.70707 h 48.37197 z"
        id="R310"
        onclick="clickF(R310)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1328-0">
       <title
          id="title627">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.31892204px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 112.28315,223.67799 -0.65507,-3.77415 h 50.89245 l 1.32883,3.77415 z"
        id="R401"
        onclick="clickF(R401)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-3-2-5-5">
       <title
          id="title630">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.32209435px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 113.07602,228.0713 -0.66815,-3.77415 h 51.90997 l 1.35539,3.77415 z"
        id="R402"
        onclick="clickF(R402)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-1-6-5">
       <title
          id="title633">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.32477546px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 113.87436,232.34581 -0.67934,-3.77416 h 52.77773 l 1.37805,3.77416 z"
        id="R403"
        onclick="clickF(R403)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-3-0-9">
       <title
          id="title636">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.32836854px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 114.69321,236.73914 -0.69442,-3.77417 h 53.95197 l 1.40871,3.77417 z"
        id="R404"
        onclick="clickF(R404)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-2-2">
       <title
          id="title639">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33024871px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 115.94809,241.87543 -0.70242,-3.77418 h 54.57157 l 1.42489,3.77418 z"
        id="R405"
        onclick="clickF(R405)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-3-2-54">
       <title
          id="title642">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33264703px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 116.85679,246.14993 -0.71266,-3.77415 h 55.36707 l 1.44565,3.77415 z"
        id="R406"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-1-60">
       <title
          id="title645">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33528641px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 117.43169,249.9241 -0.724,-3.77417 h 56.24916 l 1.46872,3.77417 z"
        id="R407"
        onclick="clickF(R407)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-3-9">
       <title
          id="title648">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <path
        style="fill:none;stroke:#000000;stroke-width:0.33772132px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
        d="m 118.29246,254.3174 -0.73456,-3.77416 h 57.06913 l 1.49012,3.77416 z"
        id="R408"
        onclick="clickF(R408)"
        inkscape:connector-curvature="0"
        inkscape:label="#path1204-9">
       <title
          id="title651">
 <?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?>      </title>
     </path>
     <rect
        id="rect658"
        width="57.850433"
        height="24.590271"
        x="-26.97135"
        y="266.8299"
        style="fill:#009cff;fill-opacity:1;stroke:#000000;stroke-width:0.56008124;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
     <flowRoot
        xml:space="preserve"
        id="flowRoot5211"
        style="font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none"
        transform="matrix(0.54193966,0,0,0.54193966,-28.137934,0)"><flowRegion
          id="flowRegion5213"><rect
            id="rect5215"
            width="106.76066"
            height="40.703468"
            x="2.1217823"
            y="446.00531" /></flowRegion><flowPara
          id="flowPara5217">Menseawdawdawd</flowPara></flowRoot>    <text
        xml:space="preserve"
        style="font-style:normal;font-weight:normal;font-size:6.22774315px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.15569359"
        x="60.828072"
        y="285.1571"
        id="text5221"><tspan
          sodipodi:role="line"
          id="tspan5219"
          x="60.828072"
          y="304.93423"
          style="stroke-width:0.54193968" /></text>
     <text
        xml:space="preserve"
        style="font-style:normal;font-weight:normal;font-size:6.57496595px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.16437416"
        x="-8.8734207"
        y="265.51871"
        id="text5225"
        transform="scale(0.93872796,1.0652714)"><tspan
          sodipodi:role="line"
          id="tspan5223"
          x="-8.8734207"
          y="265.51871"
          style="fill:#ffffff;fill-opacity:1;stroke-width:0.37825733">Mens</tspan></text>
     <rect
        id="rect658-5"
        width="57.850433"
        height="24.590271"
        x="46.539623"
        y="267.04443"
        style="fill:#009cff;fill-opacity:1;stroke:#000000;stroke-width:0.56008124;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
     <text
        xml:space="preserve"
        style="font-style:normal;font-weight:normal;font-size:6.57496595px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.16437416"
        x="72.204704"
        y="265.11551"
        id="text5225-0"
        transform="scale(0.93872796,1.0652714)"><tspan
          sodipodi:role="line"
          id="tspan5223-9"
          x="72.204704"
          y="265.11551"
          style="fill:#ffffff;fill-opacity:1;stroke-width:0.37825736">Weg</tspan></text>
     <rect
        id="rect658-8"
        width="57.850433"
        height="24.590271"
        x="120.62698"
        y="267.4469"
        style="fill:#009cff;fill-opacity:1;stroke:#000000;stroke-width:0.56008124;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
     <text
        xml:space="preserve"
        style="font-style:normal;font-weight:normal;font-size:6.57496595px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.16437416"
        x="147.06801"
        y="261.25378"
        id="text5225-04"
        transform="scale(0.922073,1.0845128)"><tspan
          sodipodi:role="line"
          id="tspan5223-6"
          x="147.06801"
          y="261.25378"
          style="fill:#ffffff;fill-opacity:1;stroke-width:0.3715463">Voertuig</tspan></text>
     <rect
        id="rect658-8-3"
        width="50.383789"
        height="36.148499"
        x="183.8031"
        y="218.66382"
        style="fill:#009cff;fill-opacity:1;stroke:#000000;stroke-width:0.63373345;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
     <text
        xml:space="preserve"
        style="font-style:normal;font-weight:normal;font-size:6.57496595px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.16437416"
        x="266.57169"
        y="167.67847"
        id="text5225-04-1"
        transform="scale(0.69626795,1.4362287)"><tspan
          sodipodi:role="line"
          id="tspan5223-6-6"
          x="266.57169"
          y="167.67847"
          style="fill:#ffffff;fill-opacity:1;stroke-width:0.16437416">Cultuur en structuur</tspan></text>
     <rect
        id="rect658-8-3-9"
        width="50.383789"
        height="36.148499"
        x="183.22548"
        y="170.00137"
        style="fill:#009cff;fill-opacity:1;stroke:#000000;stroke-width:0.63373345;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
     <text
        xml:space="preserve"
        style="font-style:normal;font-weight:normal;font-size:6.57496595px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.16437416"
        x="263.30042"
        y="135.60266"
        id="text5225-04-1-1"
        transform="scale(0.70973121,1.4089841)"><tspan
          sodipodi:role="line"
          id="tspan5223-6-6-8"
          x="263.30042"
          y="135.60266"
          style="fill:#ffffff;fill-opacity:1;stroke-width:0.42040566">Beleidsprogramma</tspan></text>
     <rect
        id="rect658-8-3-3"
        width="50.383789"
        height="36.148499"
        x="182.93666"
        y="121.70152"
        style="fill:#009cff;fill-opacity:1;stroke:#000000;stroke-width:0.63373345;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
     <text
        xml:space="preserve"
        style="font-style:normal;font-weight:normal;font-size:6.57496595px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.16437416"
        x="263.30038"
        y="102.00832"
        id="text5225-04-1-0"
        transform="scale(0.70973121,1.4089841)"><tspan
          sodipodi:role="line"
          id="tspan5223-6-6-4"
          x="263.30038"
          y="102.00832"
          style="fill:#ffffff;fill-opacity:1;stroke-width:0.42040566">Tussenuitkomsten</tspan></text>
     <rect
        id="rect658-8-3-5"
        width="50.383789"
        height="36.148499"
        x="182.93665"
        y="73.401672"
        style="fill:#009cff;fill-opacity:1;stroke:#000000;stroke-width:0.63373345;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
     <text
        xml:space="preserve"
        style="font-style:normal;font-weight:normal;font-size:6.57496595px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.16437416"
        x="266.55588"
        y="67.95694"
        id="text5225-04-1-3"
        transform="scale(0.70973121,1.4089841)"><tspan
          sodipodi:role="line"
          id="tspan5223-6-6-6"
          x="266.55588"
          y="67.95694"
          style="fill:#ffffff;fill-opacity:1;stroke-width:0.42040566">Einduitkomsten</tspan></text>
     <rect
        id="rect658-8-3-7"
        width="50.383789"
        height="36.148499"
        x="181.49258"
        y="15.119847"
        style="fill:#009cff;fill-opacity:1;stroke:#000000;stroke-width:0.63373345;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
     <text
        xml:space="preserve"
        style="font-style:normal;font-weight:normal;font-size:6.88871622px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.17221792"
        x="275.79672"
        y="20.089443"
        id="text5225-04-1-2"
        transform="scale(0.67601993,1.4792463)"><tspan
          sodipodi:role="line"
          x="275.79672"
          y="20.089443"
          style="fill:#ffffff;fill-opacity:1;stroke-width:0.44046703"
          id="tspan5848">Maatschappelijke</tspan><tspan
          sodipodi:role="line"
          x="275.79672"
          y="28.700338"
          style="fill:#ffffff;fill-opacity:1;stroke-width:0.44046703"
          id="tspan5852">kosten</tspan></text>
   </g>
 </svg>
 
 
</nav>
</body2>
</html>
<?php 
 include '../includes/footer.php';
?>
=======



<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!-- Created with Inkscape (http://www.inkscape.org/) -->

<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="210mm"
   height="297mm"
   viewBox="0 0 210 297"
   version="1.1"
   id="svg178"
   inkscape:version="0.92.2 (5c3e80d, 2017-08-06)"
   sodipodi:docname="pyramid2.svg">
  <defs
     id="defs172" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="1.3266689"
     inkscape:cx="349.5822"
     inkscape:cy="843.60549"
     inkscape:document-units="mm"
     inkscape:current-layer="svg178"
     showgrid="false"
     inkscape:window-width="1920"
     inkscape:window-height="1001"
     inkscape:window-x="-9"
     inkscape:window-y="-9"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata175">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Laag 1"
     inkscape:groupmode="layer"
     id="layer1">
    <path
       style="fill:#ff0000;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 57.266208,-0.129426 43.727736,26.306094 H 70.804683 Z"
       id="T101"
       onclick="clickF(T101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1100" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 42.221126,30.31197 -0.889952,1.783995 H 73.3122 l -0.882682,-1.769194 z"
       id="T102"
       onclick="clickF(T102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1102" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 41.421528,32.356136 -0.845686,1.695036 H 74.22393 l -0.864983,-1.733707 z"
       id="T103"
       onclick="clickF(T103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1104" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 40.638633,34.35156 -0.857897,1.719503 h 35.394562 l -0.862591,-1.728922 z"
       id="T104"
       onclick="clickF(T104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1106" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 39.915661,36.361325 -0.86893,1.735341 h 12.991892 l 0.322344,-1.767779 z"
       id="L101"
       onclick="clickF(L101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1108" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 33.910239,116.00846 0.400593,-1.73005 H 3.1883968 l -0.8126279,1.73005 z"
       id="L408"
       onclick="clickF(L408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16763778px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 34.379655,113.99459 0.394837,-1.73005 H 4.0992177 l -0.8009525,1.73005 z"
       id="L407"
       onclick="clickF(L407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16631812px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 34.83991,112.03518 0.388645,-1.73006 H 5.0343333 l -0.7883913,1.73006 z"
       id="L406"
       onclick="clickF(L406)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16511901px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 35.295325,110.02131 0.38306,-1.73006 H 5.9179891 l -0.777064,1.73006 z"
       id="L405"
       onclick="clickF(L405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16417897px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 35.873068,107.95067 0.378712,-1.73005 H 6.8292784 l -0.7682408,1.73005 z"
       id="L404"
       onclick="clickF(L404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-2" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16238248px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 36.319645,105.9368 0.37047,-1.73005 H 7.9079852 l -0.7515218,1.73005 z"
       id="L403"
       onclick="clickF(L403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16104199px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 36.754997,103.97739 0.364379,-1.73006 H 8.8104793 l -0.7391641,1.73006 z"
       id="L402"
       onclick="clickF(L402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.15945587px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 37.187401,101.96352 0.357235,-1.73006 H 9.7906365 l -0.7246755,1.73006 z"
       id="L401"
       onclick="clickF(L401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 11.760626,95.99172 h 26.753535 l 0.448481,-1.699301 H 12.583163 Z"
       id="L310"
       onclick="clickF(L310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1328" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 39.43915,92.273269 39.018701,94.07348 H 12.731815 l 0.930529,-1.865086 z"
       id="L309"
       onclick="clickF(L309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1330" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 39.469242,92.035285 0.426134,-1.74313 H 14.49581 l -0.802189,1.72568 z"
       id="L308"
       onclick="clickF(L308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1350" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 14.639633,90.035167 0.805862,-1.767774 24.885925,0.02932 -0.384018,1.734524 z"
       id="L307"
       onclick="clickF(L307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1354" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 16.377492,86.272566 -0.805862,1.711013 24.83907,0.06089 0.386494,-1.743127 z"
       id="L306"
       onclick="clickF(L306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1356" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 17.341022,84.25746 -0.830388,1.763721 h 24.358044 l 0.394651,-1.704375 z"
       id="L305"
       onclick="clickF(L305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1358" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 18.31156,82.242362 -0.867497,1.776834 h 23.876599 l 0.401222,-1.732759 z"
       id="L304"
       onclick="clickF(L304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1360" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 19.262566,80.246245 -0.847314,1.777529 h 23.378416 l 0.402141,-1.73673 z"
       id="L303"
       onclick="clickF(L303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1362" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 20.164384,78.285221 -0.802718,1.720199 h 22.897265 l 0.406315,-1.69726 z"
       id="L302"
       onclick="clickF(L302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1364" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 21.115751,76.261138 -0.822537,1.760327 h 22.43245 l 0.394558,-1.703984 z"
       id="L301"
       onclick="clickF(L301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1366" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 23.925262,70.257669 -0.842356,1.789 21.033747,0.0069 0.40293,-1.747498 z"
       id="L208"
       onclick="clickF(L208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1368" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 24.866721,68.250779 -0.817581,1.806205 20.519495,-0.02281 0.402932,-1.731284 z"
       id="L207"
       onclick="clickF(L207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1370" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 45.509442,66.060401 0.381538,-1.75459 H 26.76946 l -0.84436,1.692364 z"
       id="L205"
       onclick="clickF(L205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1374" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 46.362553,62.33463 c -0.007,0.0324 -0.427457,1.719126 -0.427457,1.719126 H 26.881723 l 0.819876,-1.783997 z"
       id="L204"
       onclick="clickF(L204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1376" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 46.817574,60.309233 -0.421179,1.766061 H 27.806712 l 0.816373,-1.780086 z"
       id="L203"
       onclick="clickF(L203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1378" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 46.867124,60.039735 0.42118,-1.720187 H 29.58888 l -0.849645,1.702962 z"
       id="L202"
       onclick="clickF(L202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1380" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 47.347107,58.089543 0.399426,-1.77183 h -17.25088 l -0.782897,1.720866 z"
       id="L201"
       onclick="clickF(L201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1382" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 48.745102,52.092897 49.121671,50.32066 H 33.325114 l -0.819878,1.756015 z"
       id="L108"
       onclick="clickF(L108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1384" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 49.210862,50.068364 0.386491,-1.766061 H 34.285139 l -0.828846,1.777532 z"
       id="L107"
       onclick="clickF(L107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1386" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 50.055697,46.318352 -0.406315,1.771795 H 34.403946 l 0.815105,-1.776097 z"
       id="L106"
       onclick="clickF(L106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1388" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 50.099299,46.080029 50.509238,44.31834 H 36.159643 l -0.818124,1.745474 z"
       id="L105"
       onclick="clickF(L105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1390" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 50.574057,44.081145 0.420449,-1.719118 h -13.90637 l -0.798853,1.71507 z"
       id="L104"
       onclick="clickF(L104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1392" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 51.029362,42.086682 0.41127,-1.731659 -13.418264,-0.0028 -0.790578,1.722003 z"
       id="L103"
       onclick="clickF(L103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1394" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 51.510002,40.039652 0.386495,-1.691518 H 38.958871 l -0.802717,1.731662 z"
       id="L102"
       onclick="clickF(L102)"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 75.274399,36.529778 0.868934,1.735341 H 63.151431 L 62.829094,36.49734 Z"
       id="R101"
       onclick="clickF(R101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1108-4" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 81.279824,116.17692 -0.400596,-1.73006 h 31.122432 l 0.81263,1.73006 z"
       id="R408"
       onclick="clickF(R408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16763778px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 80.810402,114.16305 -0.394835,-1.73006 h 30.675273 l 0.80096,1.73006 z"
       id="R407"
       onclick="clickF(R407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16631812px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 80.496878,112.43299 -0.388649,-1.73005 h 30.194221 l 0.78839,1.73005 z"
       id="R406"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-60" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16511901px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 80.001325,110.47358 -0.38306,-1.73006 h 29.760395 l 0.77706,1.73006 z"
       id="R405"
       onclick="clickF(R405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-54" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16417897px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 79.31699,108.11913 -0.378711,-1.73006 h 29.422501 l 0.76824,1.73006 z"
       id="R404"
       onclick="clickF(R404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-2-2" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16238248px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 78.87042,106.10525 -0.370472,-1.73005 h 28.782132 l 0.75151,1.73005 z"
       id="R403"
       onclick="clickF(R403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-0-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16104199px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 78.435056,104.14584 -0.364372,-1.73005 h 28.308896 l 0.73916,1.73005 z"
       id="R402"
       onclick="clickF(R402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-6-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.15945587px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 78.002659,102.13197 -0.357235,-1.73005 h 27.753996 l 0.72468,1.73005 z"
       id="R401"
       onclick="clickF(R401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-5-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 103.42943,96.160169 H 76.675895 l -0.448478,-1.699297 h 26.379473 z"
       id="R310"
       onclick="clickF(R310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1328-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 75.750911,92.441721 0.42045,1.800211 h 26.286879 l -0.93053,-1.865085 z"
       id="R309"
       onclick="clickF(R309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1330-4" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 75.720819,92.203738 -0.426136,-1.743131 h 25.399567 l 0.80218,1.725681 z"
       id="R308"
       onclick="clickF(R308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1350-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 100.55042,90.203619 -0.805859,-1.767766 -24.885925,0.02932 0.384021,1.734524 z"
       id="R307"
       onclick="clickF(R307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1354-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 98.812568,86.441019 0.805858,1.711012 -24.839064,0.06089 -0.386499,-1.743126 z"
       id="R306"
       onclick="clickF(R306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1356-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 97.849032,84.425913 0.830393,1.763721 H 74.321382 l -0.394647,-1.704375 z"
       id="R305"
       onclick="clickF(R305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1358-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 96.878504,82.410815 0.867493,1.776834 H 73.869399 l -0.401225,-1.73276 z"
       id="R304"
       onclick="clickF(R304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1360-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 95.927496,80.414698 0.847307,1.777528 H 73.396392 l -0.402144,-1.736729 z"
       id="R303"
       onclick="clickF(R303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1362-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 95.025671,78.453674 0.802719,1.720199 H 72.931124 l -0.406315,-1.697261 z"
       id="R302"
       onclick="clickF(R302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1364-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 94.074308,76.42959 0.822535,1.760328 H 72.464394 l -0.394556,-1.703985 z"
       id="R301"
       onclick="clickF(R301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1366-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.264797,70.426121 0.842356,1.789001 -21.033748,0.0069 -0.402929,-1.747491 z"
       id="R208"
       onclick="clickF(R208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1368-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 90.323334,68.419231 0.817585,1.806206 -20.519491,-0.02281 -0.402934,-1.731284 z"
       id="R207"
       onclick="clickF(R207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1370-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 89.357106,66.441014 0.842356,1.777533 H 70.165936 l -0.408518,-1.774664 c 0,0 19.625362,0.02648 19.599688,-0.0028 z"
       id="R206"
       onclick="clickF(R206)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1372-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 69.680616,66.228854 -0.381539,-1.75459 h 19.121527 l 0.84435,1.692363 z"
       id="R205"
       onclick="clickF(R205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1374-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 68.827505,62.503083 c 0.007,0.0324 0.427453,1.719126 0.427453,1.719126 H 88.30834 l -0.819885,-1.783997 z"
       id="R204"
       onclick="clickF(R204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1376-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 68.372486,60.477685 0.421181,1.766061 h 18.589684 l -0.816376,-1.780085 z"
       id="R203"
       onclick="clickF(R203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1378-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 68.322938,60.208188 67.901757,58.488 h 17.699419 l 0.84965,1.702963 z"
       id="R202"
       onclick="clickF(R202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1380-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 67.842949,58.257996 -0.399425,-1.771831 h 17.250888 l 0.782892,1.720866 z"
       id="R201"
       onclick="clickF(R201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1382-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 66.444957,52.26135 -0.376566,-1.772237 h 15.796554 l 0.81988,1.756014 z"
       id="R108"
       onclick="clickF(R108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1384-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 65.9792,50.236817 -0.386499,-1.766062 h 15.312217 l 0.828845,1.777533 z"
       id="R107"
       onclick="clickF(R107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1386-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 65.134361,46.4868 0.406315,1.771799 h 15.245438 l -0.815107,-1.776096 z"
       id="R106"
       onclick="clickF(R106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1388-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 65.090763,46.248481 64.68082,44.486792 h 14.349595 l 0.818128,1.745475 z"
       id="R105"
       onclick="clickF(R105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1390-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 64.616003,44.249598 64.195559,42.53048 h 13.906362 l 0.798855,1.715069 z"
       id="R104"
       onclick="clickF(R104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1392-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 64.160699,42.255134 -0.411275,-1.731659 13.418263,-0.0028 0.790578,1.722003 z"
       id="R103"
       onclick="clickF(R103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1394-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 63.680055,40.208104 63.293561,38.516586 H 76.23119 l 0.802714,1.731662 z"
       id="R102"
       onclick="clickF(R102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1396-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 41.926943,115.95741 0.237843,-1.76608 h 30.68164 l 0.23784,1.76608 z"
       id="M408"
       onclick="clickF(M408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1512" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 42.452372,112.2783 -0.262781,1.69886 30.542159,-0.0527 -0.21023,-1.67857 z"
       id="M407"
       onclick="clickF(M407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1514" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 43.036873,108.29682 -0.267572,1.7202 29.452792,0.0172 -0.272526,-1.7202 z"
       id="M405"
       onclick="clickF(M405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1516" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 42.690021,110.29224 -0.267573,1.62845 30.02758,0.0344 -0.198203,-1.66285 z"
       id="M406"
       onclick="clickF(M406)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1518" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 43.314357,106.22111 -0.277484,1.66285 h 28.858185 l -0.267576,-1.55964 z"
       id="M404"
       onclick="clickF(M404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1520" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 43.681031,104.30598 -0.346854,1.63991 28.184298,-0.0115 -0.247755,-1.66284 z"
       id="M403"
       onclick="clickF(M403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1528" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 43.978332,102.33349 -0.336943,1.60551 27.695868,0.0276 -0.315335,-1.70291 z"
       id="M402"
       onclick="clickF(M402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1530" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 44.295455,100.31514 -0.317123,1.61697 27.024817,0.0459 -0.277477,-1.72019 z"
       id="M401"
       onclick="clickF(M401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1532" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 45.286464,94.271528 -0.297302,1.743127 24.983339,-0.04586 -0.277482,-1.697253 z"
       id="M310"
       onclick="clickF(M310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1534" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 45.653138,92.333451 -0.297303,1.605513 24.319363,0.01144 -0.366672,-1.66285 z"
       id="M309"
       onclick="clickF(M309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1536" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 69.073836,90.286551 0.217228,1.751556 -23.61174,-0.01215 0.199714,-1.723174 z"
       id="M308"
       onclick="clickF(M308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1542" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 69.066833,90.035167 68.800541,88.307939 H 46.187365 l -0.266284,1.670466 z"
       id="M307"
       onclick="clickF(M307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1544" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 68.451304,86.289846 0.272526,1.720192 -22.41167,0.01724 0.222976,-1.708728 z"
       id="M306"
       onclick="clickF(M306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1546" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 68.040033,84.328826 0.331991,1.634181 -21.78523,0.01764 0.287306,-1.727228 z"
       id="M305"
       onclick="clickF(M305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1548" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 68.010301,83.93892 67.861653,82.356346 47.119832,82.321936 46.8919,83.870107 Z"
       id="M304"
       onclick="clickF(M304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1550" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 47.357617,80.31241 -0.210225,1.686681 20.70435,-0.04414 -0.16847,-1.605505 z"
       id="M303"
       onclick="clickF(M303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1552" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 47.625246,78.354034 -0.178381,1.628447 20.12244,0.01717 -0.173426,-1.702986 z"
       id="M302"
       onclick="clickF(M302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1554" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 47.96219,76.312741 47.763988,77.99853 67.20984,77.976984 67.048668,76.314627 Z"
       id="M301"
       onclick="clickF(M301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1556" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 49.01266,70.315006 -0.227933,1.766061 17.372392,-0.02293 -0.178386,-1.720195 z"
       id="M208"
       onclick="clickF(M208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1558" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 49.17122,68.3884 -0.15856,1.66285 16.995804,-0.03441 -0.198202,-1.674318 z"
       id="M207"
       onclick="clickF(M207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1560" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 49.557714,66.370039 -0.317122,1.66285 h 16.539944 l -0.277487,-1.708724 z"
       id="M206"
       onclick="clickF(M206)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1562" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 49.785646,64.317279 -0.208111,1.743122 15.846239,-0.04586 -0.237845,-1.685789 z"
       id="M205"
       onclick="clickF(M205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1564" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 50.1325,62.356263 -0.297304,1.66285 h 15.261538 l -0.218018,-1.66285 z"
       id="M204"
       onclick="clickF(M204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1566" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 50.459532,60.418185 -0.198202,1.62844 14.468737,-0.05732 -0.16847,-1.685785 z"
       id="M203"
       onclick="clickF(M203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1568" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 50.737015,58.376885 -0.218021,1.605513 13.963317,0.06881 -0.218018,-1.754598 z"
       id="M202"
       onclick="clickF(M202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1570" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 51.073958,56.312658 -0.247752,1.743126 13.40835,-0.03441 -0.297303,-1.685785 z"
       id="M201"
       onclick="clickF(M201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1572" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 52.094698,50.337861 -0.257663,1.720196 11.356963,-0.02293 -0.227929,-1.697261 H 52.045147 Z"
       id="M108"
       onclick="clickF(M108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1574" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 52.46137,48.342443 -0.297302,1.571102 10.633526,0.114687 -0.227929,-1.697253 z"
       id="M107"
       onclick="clickF(M107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1576" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 52.847863,46.358492 -0.2973,1.720187 c 0,0 10.019102,-0.02293 9.939822,-0.05732 -0.07929,-0.03441 -0.327035,-1.674322 -0.327035,-1.674322 z"
       id="M106"
       onclick="clickF(M106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1578" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 53.115438,44.351602 -0.218025,1.582577 9.166831,0.03441 -0.198192,-1.605513 z"
       id="M105"
       onclick="clickF(M105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1580" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 53.303728,42.321777 -0.218018,1.685789 8.720878,0.02293 -0.148659,-1.651383 z"
       id="M104"
       onclick="clickF(M104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1582" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 61.400274,40.406626 c 0.02972,0.160553 0.17838,1.605513 0.17838,1.605513 l -8.175821,0.02293 0.198197,-1.685789 z"
       id="M103"
       onclick="clickF(M103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1584" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 61.132697,38.353866 0.198202,1.685786 -7.660498,0.02293 0.257667,-1.685787 z"
       id="M102"
       onclick="clickF(M102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1586" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 60.736293,36.346977 0.287398,1.720196 -7.006438,-0.03439 0.178383,-1.685788 z"
       id="M101"
       onclick="clickF(M101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1588" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.16885522px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 24.984762,67.987382 h 20.033524 l 0.408518,-1.774668 -19.599685,-0.0028 z"
       id="L206"
       onclick="clickF(L206)"
       inkscape:connector-curvature="0" />
  </g>
</svg>


</body>
</html>
>>>>>>> master
