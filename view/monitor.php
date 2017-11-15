<?php 
include "../Controller/pyramid.php"; 
include '../includes/header.php';    
$y = 0;
?>

<head>
<script src="https://d3js.org/d3.v4.js"></script>
</head>
<html>
<body>
<nav class="pyramid">
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
   width="130mm"
   height="165mm"
   viewBox="0 0 210 297"
   version="1.1"
   id="svg178"
   inkscape:version="0.92.2 (5c3e80d, 2017-08-06)"
   sodipodi:docname="pyramid.svg">
  <defs
     id="defs172" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.46904829"
     inkscape:cx="51.558524"
     inkscape:cy="641.74657"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
     showgrid="false"
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
        <dc:title />
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Laag 1"
     inkscape:groupmode="layer"
     id="layer1">
     <path
     style="fill:#ff0000;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
     d="M 103.65686,0.10394173 78.71438,66.90259 h 49.88497 z"
     id="T101"
     onclick="clickF(T101)"
     inkscape:connector-curvature="0"
     inkscape:label="#path1100">   
     <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
</path>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 75.938691,77.024846 -1.639595,4.507891 h 58.919954 l -1.6262,-4.470491 z"
       id="T102"
       onclick="clickF(T102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1102" >   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 74.465558,82.190151 -1.558042,4.283105 h 61.991254 l -1.59359,-4.380821 z"
       id="T103"
       onclick="clickF(T103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1104">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 73.023199,87.232292 -1.580539,4.34493 h 65.20886 l -1.58919,-4.36873 z"
       id="T104"
       onclick="clickF(T104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1106">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 71.691238,92.310671 -1.600866,4.38495 h 23.935497 l 0.593867,-4.466916 z"
       id="L101"
       onclick="clickF(L101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1108">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 93.051968,101.60526 0.712056,-4.274217 h -23.83552 l -1.478878,4.375657 z"
       id="L102"
       onclick="clickF(L102)"
       inkscape:connector-curvature="0">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 92.166466,106.7778 0.757699,-4.37565 -24.721019,-0.007 -1.456514,4.35125 z"
       id="L103"
       onclick="clickF(L103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1394">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.327639,111.81751 0.77461,-4.34395 H 66.481972 l -1.471759,4.33373 z"
       id="L104"
       onclick="clickF(L104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1392">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 90.452972,116.8684 0.755248,-4.45153 H 64.771372 l -1.507264,4.41056 z"
       id="L105"
       onclick="clickF(L105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1390">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 90.372643,117.47061 -0.748571,4.47706 H 61.536779 l 1.501701,-4.48794 z"
       id="L106"
       onclick="clickF(L106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1388">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 88.816168,126.94633 0.712049,-4.46257 H 61.317896 l -1.527017,4.49156 z"
       id="L107"
       onclick="clickF(L107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1386">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 87.95808,132.06203 0.693768,-4.47818 H 59.549202 l -1.510494,4.43719 z"
       id="L108"
       onclick="clickF(L108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1384">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 85.382496,147.21466 0.735879,-4.47715 H 54.33637 l -1.442363,4.34837 z"
       id="L201"
       onclick="clickF(L201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1382">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 84.498204,152.14251 0.775957,-4.34666 H 52.665785 l -1.565336,4.30313 z"
       id="L202"
       onclick="clickF(L202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1380">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 84.406916,152.82349 -0.775956,4.46258 H 49.382424 l 1.504037,-4.49802 z"
       id="L203"
       onclick="clickF(L203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1378">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 83.568612,157.94137 c -0.0129,0.0819 -0.787522,4.34398 -0.787522,4.34398 H 47.678279 l 1.510491,-4.5079 z"
       id="L204"
       onclick="clickF(L204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1376">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 81.99689,167.35584 0.702923,-4.43359 H 47.471452 l -1.555599,4.27636 z"
       id="L205"
       onclick="clickF(L205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1374">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 44.183429,172.22504 h 36.908584 l 0.75263,-4.48433 -36.109305,-0.007 z"
       id="L206"
       onclick="clickF(L206)"
       inkscape:connector-curvature="0">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 43.965958,172.8906 -1.506263,4.56402 37.803908,-0.0576 0.742338,-4.3747 z"
       id="L207"
       onclick="clickF(L207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1370">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 42.231469,177.96172 -1.551907,4.52054 38.751336,0.0174 0.742334,-4.41567 z"
       id="L208"
       onclick="clickF(L208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1368">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 37.055391,193.1316 -1.515393,4.44808 h 41.328224 l 0.72691,-4.30571 z"
       id="L301"
       onclick="clickF(L301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1366">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 35.302649,198.24615 -1.47888,4.34669 H 76.00834 l 0.748571,-4.28872 z"
       id="L302"
       onclick="clickF(L302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1364">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 33.641193,203.20137 -1.561042,4.49155 h 43.071016 l 0.740881,-4.38846 z"
       id="L303"
       onclick="clickF(L303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1362">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 31.889115,208.24526 -1.598225,4.4898 h 43.988839 l 0.739188,-4.37843 z"
       id="L304"
       onclick="clickF(L304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1360" >   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 30.101053,213.33712 -1.529858,4.45666 H 73.44702 l 0.727082,-4.3067 z"
       id="L305"
       onclick="clickF(L305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1358">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 28.325902,218.42899 -1.484672,4.32348 45.762039,0.15386 0.712053,-4.40462 z"
       id="L306"
       onclick="clickF(L306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1356">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 25.124173,227.93653 1.484673,-4.4669 45.848362,0.0741 -0.707492,4.38289 z"
       id="L307"
       onclick="clickF(L307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1354">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 70.868782,232.99053 0.785084,-4.40463 H 24.859202 l -1.477905,4.36054 z"
       id="L308"
       onclick="clickF(L308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1350">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 70.813342,233.59188 -0.77461,4.54887 h -48.42941 l 1.714352,-4.7128 z"
       id="L309"
       onclick="clickF(L309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1330">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 19.82006,242.98786 h 49.289137 l 0.826255,-4.29388 H 21.335454 Z"
       id="L310"
       onclick="clickF(L310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1328">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.34404513px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 66.664852,258.07771 0.658149,-4.3716 H 16.190668 l -1.3351,4.3716 z"
       id="L401"
       onclick="clickF(L401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-5">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.34746739px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 65.868217,263.16646 0.67131,-4.3716 H 14.384884 l -1.361792,4.3716 z"
       id="L402"
       onclick="clickF(L402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-6">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>  
  <path
       style="fill:none;stroke:#000000;stroke-width:0.35035968px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 65.06615,268.1176 0.682532,-4.37158 h -53.0265 l -1.384559,4.37158 z"
       id="L403"
       onclick="clickF(L403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-0">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.3542358px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 64.243403,273.20635 0.697716,-4.37158 H 10.734836 l -1.4153613,4.37158 z"
       id="L404"
       onclick="clickF(L404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-2">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.35626405px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 63.179003,278.43856 0.705727,-4.37161 H 9.0559305 l -1.4316169,4.37161 z"
       id="L405"
       onclick="clickF(L405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.35885128px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 62.339973,283.52731 63.05599,279.1557 H 7.4279352 l -1.4524857,4.37161 z"
       id="L406"
       onclick="clickF(L406)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.3616986px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 61.492027,288.47845 0.727424,-4.37158 H 5.7051333 l -1.4756277,4.37158 z"
       id="L407"
       onclick="clickF(L407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 60.627202,293.5672 0.738029,-4.37158 H 4.0270905 l -1.4971377,4.37158 z"
       id="L408"
       onclick="clickF(L408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 110.04994,92.274416 0.52949,4.346681 -12.90825,-0.0869 0.328642,-4.259737 z"
       id="M101"
       onclick="clickF(M101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1588">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 110.78025,97.345527 0.36516,4.259733 -14.11325,0.0579 0.474711,-4.259735 z"
       id="M102"
       onclick="clickF(M102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1586">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 111.27322,102.53255 c 0.0548,0.40569 0.32864,4.05689 0.32864,4.05689 l -15.062651,0.0579 0.365146,-4.25974 z"
       id="M103"
       onclick="clickF(M103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1584" >   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 96.356624,107.37185 -0.401664,4.25974 16.06683,0.0579 -0.27388,-4.1728 z"
       id="M104"
       onclick="clickF(M104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1582">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 96.009729,112.50092 -0.401676,3.99894 16.888427,0.087 -0.36514,-4.0569 z"
       id="M105"
       onclick="clickF(M105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1580">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 95.516765,117.57203 -0.547728,4.34666 c 0,0 18.458603,-0.0579 18.312543,-0.14484 -0.14608,-0.087 -0.60251,-4.23076 -0.60251,-4.23076 z"
       id="M106"
       onclick="clickF(M106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1578">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 94.804713,122.58518 -0.547732,3.96995 19.590579,0.28979 -0.41992,-4.2887 z"
       id="M107"
       onclick="clickF(M107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1576">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 94.129178,127.62731 -0.474703,4.34668 20.923395,-0.0579 -0.41992,-4.28873 H 94.037888 Z"
       id="M108"
       onclick="clickF(M108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1574">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 92.248627,142.72474 -0.456444,4.40462 24.702757,-0.087 -0.54774,-4.25973 z"
       id="M201"
       onclick="clickF(M201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1572">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.627863,147.94073 -0.401669,4.0569 25.725196,0.17387 -0.40167,-4.43361 z"
       id="M202"
       onclick="clickF(M202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1570">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
        <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.116644,153.0988 -0.365155,4.11482 26.656351,-0.14484 -0.31038,-4.25972 z"
       id="M203"
       onclick="clickF(M203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1568">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 90.51414,157.99603 -0.547735,4.20178 h 28.116955 l -0.40166,-4.20178 z"
       id="M204"
       onclick="clickF(M204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1566">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 89.875117,162.95123 -0.383412,4.40461 29.194175,-0.11588 -0.43819,-4.25974 z"
       id="M205"
       onclick="clickF(M205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1564">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 89.455188,168.13825 -0.584247,4.20178 h 30.472219 l -0.51123,-4.3177 z"
       id="M206"
       onclick="clickF(M206)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1562">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 88.743134,173.23835 -0.292121,4.20178 31.312067,-0.087 -0.36516,-4.23076 z"
       id="M207"
       onclick="clickF(M207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1560">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 88.451013,178.1066 -0.419931,4.46257 32.005868,-0.0579 -0.32864,-4.34667 z"
       id="M208"
       onclick="clickF(M208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1558">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 86.515689,193.26199 -0.365156,4.25974 35.825887,-0.0545 -0.29693,-4.20053 z"
       id="M301"
       onclick="clickF(M301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1556">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 85.894923,198.42003 -0.328639,4.11485 37.072396,0.0434 -0.31951,-4.30319 z"
       id="M302"
       onclick="clickF(M302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1554">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>  
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 85.401859,203.36856 -0.387306,4.26199 38.144477,-0.11153 -0.31038,-4.05687 z"
       id="M303"
       onclick="clickF(M303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1552">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>  
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 123.45115,212.53221 -0.27386,-3.99893 -38.213512,-0.0869 -0.419929,3.91199 z"
       id="M304"
       onclick="clickF(M304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1550">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 123.50592,213.51745 0.61164,4.12933 -40.13582,0.0446 0.529316,-4.36445 z"
       id="M305"
       onclick="clickF(M305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1548">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 124.26362,218.47266 0.50209,4.34667 -41.289939,0.0436 0.410798,-4.3177 z"
       id="M306"
       onclick="clickF(M306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1546">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>  
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 125.39764,227.93653 -0.4906,-4.36445 H 83.245856 l -0.490586,4.22102 z"
       id="M307"
       onclick="clickF(M307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1544">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 125.41054,228.57174 0.40021,4.42592 -43.500879,-0.0307 0.367941,-4.3542 z"
       id="M308"
       onclick="clickF(M308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1542">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 82.261627,233.74395 -0.547733,4.0569 44.804566,0.0289 -0.67554,-4.20177 z"
       id="M309"
       onclick="clickF(M309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1536">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 81.586089,238.64119 -0.547732,4.40462 46.027833,-0.11588 -0.51122,-4.28871 z"
       id="M310"
       onclick="clickF(M310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1534">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>

  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 79.760312,253.9125 -0.584249,4.08584 49.788927,0.11599 -0.5112,-4.34667 z"
       id="M401"
       onclick="clickF(M401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1532">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 79.176063,259.01257 -0.620763,4.05689 51.02523,0.0697 -0.58095,-4.303 z"
       id="M402"
       onclick="clickF(M402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1530">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 78.628334,263.99676 -0.639024,4.14381 51.92509,-0.0291 -0.45645,-4.20175 z"
       id="M403"
       onclick="clickF(M403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1528">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 77.952795,268.83601 -0.51122,4.20178 h 53.166615 l -0.49296,-3.94098 z"
       id="M404"
       onclick="clickF(M404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1520">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 77.441575,274.08102 -0.492959,4.3467 54.262084,0.0435 -0.50208,-4.34669 z"
       id="M405"
       onclick="clickF(M405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1516"  >   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 76.802555,279.12316 -0.492961,4.11485 55.321046,0.0869 -0.36516,-4.20177 z"
       id="M406"
       onclick="clickF(M406)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1518" >   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 76.364725,284.14164 -0.484133,4.29276 56.269078,-0.13316 -0.38732,-4.2415 z"
       id="M407"
       onclick="clickF(M407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1514" >   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 75.396705,293.4382 0.438188,-4.46262 h 56.526047 l 0.43818,4.46262 z"
       id="M408"
       onclick="clickF(M408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1512" >   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 136.83409,92.736327 1.60088,4.38495 h -23.93552 l -0.59385,-4.466916 z"
       id="R101"
       onclick="clickF(R101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1108-4">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 115.47336,102.03091 -0.71206,-4.274213 h 23.83553 l 1.47887,4.375653 z"
       id="R102"
       onclick="clickF(R102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1396-1">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 116.35887,107.20345 -0.75771,-4.37564 24.72102,-0.007 1.45651,4.35125 z"
       id="R103"
       onclick="clickF(R103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1394-0">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 117.19769,112.24317 -0.7746,-4.34396 h 25.62026 l 1.47177,4.33373 z"
       id="R104"
       onclick="clickF(R104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1392-8">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 118.07236,117.29405 -0.75525,-4.45153 h 26.43685 l 1.50727,4.41056 z"
       id="R105"
       onclick="clickF(R105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1390-9">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 118.15268,117.89625 0.74858,4.47707 h 28.08729 l -1.5017,-4.48793 z"
       id="R106"
       onclick="clickF(R106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1388-1" >   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 119.70917,127.37199 -0.71207,-4.46258 h 28.21033 l 1.52701,4.49156 z"
       id="R107"
       onclick="clickF(R107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1386-8">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 120.56725,132.48768 -0.69376,-4.47818 h 29.10264 l 1.5105,4.43719 z"
       id="R108"
       onclick="clickF(R108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1384-6">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 123.14283,147.64032 -0.73588,-4.47716 h 31.78202 l 1.44235,4.34838 z"
       id="R201"
       onclick="clickF(R201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1382-1">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 124.02713,152.56817 -0.77596,-4.34666 h 32.60837 l 1.56534,4.30313 z"
       id="R202"
       onclick="clickF(R202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1380-9">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 124.11842,153.24914 0.77595,4.46258 h 34.24854 l -1.50404,-4.49801 z"
       id="R203"
       onclick="clickF(R203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1378-6" >   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 124.95672,158.36703 c 0.0129,0.0819 0.78751,4.34397 0.78751,4.34397 h 35.10283 l -1.51051,-4.50789 z"
       id="R204"
       onclick="clickF(R204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1376-1">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 126.52844,167.7815 -0.70293,-4.43359 h 35.22838 l 1.55558,4.27635 z"
       id="R205"
       onclick="clickF(R205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1374-8">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 162.77924,168.3176 1.55191,4.49156 h -36.90859 l -0.75263,-4.48432 c 0,0 36.15661,0.0669 36.10931,-0.007 z"
       id="R206"
       onclick="clickF(R206)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1372-0">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 164.55936,173.31626 1.50627,4.56401 -37.8039,-0.0576 -0.74234,-4.37469 z"
       id="R207"
       onclick="clickF(R207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1370-1">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 166.29386,178.38737 1.55191,4.52054 -38.75134,0.0174 -0.74233,-4.41565 z"
       id="R208"
       onclick="clickF(R208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1368-6">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 171.46994,193.55725 1.51539,4.44809 h -41.32822 l -0.72691,-4.30572 z"
       id="R301"
       onclick="clickF(R301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1366-0">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 173.22267,198.67181 1.47888,4.34669 h -42.18457 l -0.74857,-4.28873 z"
       id="R302"
       onclick="clickF(R302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1364-5">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 174.88414,203.62703 1.56103,4.49155 h -43.07101 l -0.74088,-4.38846 z"
       id="R303"
       onclick="clickF(R303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1362-1">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 176.63622,208.67092 1.59822,4.4898 H 134.2456 l -0.73919,-4.37843 z"
       id="R304"
       onclick="clickF(R304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1360-6">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 178.42427,213.76277 1.52986,4.45667 h -44.87582 l -0.72707,-4.30671 z"
       id="R305"
       onclick="clickF(R305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1358-0">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 180.19943,218.85465 1.48466,4.32347 -45.76202,0.15386 -0.71207,-4.40462 z"
       id="R306"
       onclick="clickF(R306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1356-8">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>  
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 183.40114,228.36218 -1.48466,-4.46688 -45.84836,0.0741 0.70749,4.38288 z"
       id="R307"
       onclick="clickF(R307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1354-5">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 137.65655,233.41619 -0.78509,-4.40464 h 46.79467 l 1.47789,4.36054 z"
       id="R308"
       onclick="clickF(R308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1350-1">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 137.71199,234.01753 0.77461,4.54887 h 48.4294 l -1.71435,-4.71279 z"
       id="R309"
       onclick="clickF(R309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1330-4">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path> 
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 188.70526,243.4135 h -49.28913 l -0.82625,-4.29387 h 48.59998 z"
       id="R310"
       onclick="clickF(R310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1328-0">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.34404513px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 141.86048,258.50336 -0.65815,-4.37158 h 51.13233 l 1.3351,4.37158 z"
       id="R401"
       onclick="clickF(R401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-5-5">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.34746739px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 142.6571,263.59211 -0.6713,-4.37158 h 52.15465 l 1.36178,4.37158 z"
       id="R402"
       onclick="clickF(R402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-6-5">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.35035968px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 143.45919,268.54325 -0.68254,-4.37158 h 53.02651 l 1.38454,4.37158 z"
       id="R403"
       onclick="clickF(R403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-0-9">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.3542358px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 144.28192,273.63203 -0.69771,-4.37161 h 54.20628 l 1.41536,4.37161 z"
       id="R404"
       onclick="clickF(R404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-2-2">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.35626405px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 145.5427,279.58138 -0.70572,-4.37161 h 54.82879 l 1.43161,4.37161 z"
       id="R405"
       onclick="clickF(R405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-54">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.35885128px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 146.45568,284.53251 -0.71602,-4.37158 h 55.62805 l 1.45248,4.37158 z"
       id="R406"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-60">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.3616986px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 147.0333,288.90412 -0.72742,-4.37161 h 56.51431 l 1.47564,4.37161 z"
       id="R407"
       onclick="clickF(R407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-9">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>
  <path
       style="fill:none;stroke:#000000;stroke-width:0.36432537px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 147.89813,293.99287 -0.73803,-4.3716 h 57.33813 l 1.49715,4.3716 z"
       id="R408"
       onclick="clickF(R408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-9">   
       <title><?php echo $numbers[$y] . "% " . $tooltip[$y]; $y++;?></title>
  </path>   
  </g>
</svg>
</nav>
</body>
</html>