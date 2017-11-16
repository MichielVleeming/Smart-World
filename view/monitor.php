<?php 
include("../Controller/pyramid.php"); 
include '../includes/header.php';     
?>

<script src="https://d3js.org/d3.v4.js"></script>
<html>
<body>
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