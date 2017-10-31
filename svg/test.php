<script src="https://d3js.org/d3.v4.js"></script>
<html>
<body>
</form>
<body onload="color()">
    <?php
// Set array values to use later
$numbers = array(0, 0.5 , 1 , 1.5 , 0 , -5 , -5 , 1);
$SVG_paths = array("#Top", "#Semitop1", "#Semitop2" , "#Semitop3", "#righttop1", "#rightmiddle6", "#lefttop1", "#test");
?>
<script>
// Echo the arrays in JSON.parse so that it can be used in Javascript
numbers = JSON.parse('<?php echo json_encode($numbers);?>');
SVG_paths = JSON.parse('<?php echo json_encode($SVG_paths);?>');

//Set color ranges from Red to Yellow to Green ( 0 , 1 , 2 )
var colour = d3.scaleLinear()
    .domain([-5 , 0 , 5])
    .range(["#660000", "#ffff1a", "#00ff00"]);
//Create a function to fill in all pyramid blocks
function color() {
    for(var i= 0; i < SVG_paths.length; i++){
d3.select(SVG_paths[i]).style("fill", colour(numbers[i]));
    }
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
   width="500mm"
   height="500mm"
   viewBox="0 0 210 297"
   version="1.1"
   id="svg108"
   inkscape:version="0.92.2 (5c3e80d, 2017-08-06)"
   sodipodi:docname="pyramid.svg">
  <defs
     id="defs102" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="1.4142136"
     inkscape:cx="188.1365"
     inkscape:cy="1673.3031"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
     showgrid="false"
     inkscape:window-width="1920"
     inkscape:window-height="1001"
     inkscape:window-x="-9"
     inkscape:window-y="-9"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata105">
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
    <!-- Make sure the ID is at the top and given the same name as in database -->
    <path
       id="Top"
       style="fill:none;stroke:#000000;stroke-width:0.18996832px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 0.72994096,0.80992812 -10.262525,21.107067 H 11.829251 L 0.72994096,0.80992812"
       inkscape:connector-curvature="0"
       onclick="test"
       onmouseover="test"
       onmouseout="" />
    <path
       id="Semitop1"
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 12.691991,23.144121 0.62481,1.071554 h -25.409906 l 0.701352,-1.071554 z"
       inkscape:connector-curvature="0" />
    <path
       id="Semitop2"
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 13.316801,24.215675 0.64182,1.100745 h -26.742826 l 0.691099,-1.100745 h 25.409907"
       inkscape:connector-curvature="0" />
    <path
       id="Semitop3"
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 13.958621,25.31642 0.54847,0.940617 h -27.799843 l 0.508547,-0.940617 z"
       inkscape:connector-curvature="0" />
    <path
       id="righttop1"
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 15.091261,27.63081 0.64292,1.102624 h -7.8024 l -0.64207,-1.101161 z"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 7.931781,28.733435 0.63639,1.102264 h 7.78773 l -0.62172,-1.102264 z"
       id="righttop2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 8.568171,29.835699 0.63317,1.096682 h 7.80362 l -0.63307,-1.096499 z"
       id="righttop3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 9.201341,30.932381 0.63421,1.098487 h 7.97038 l -0.64501,-1.117187 z"
       id="righttop4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 9.835551,32.030868 0.63347,1.097214 h 7.92741 l -0.628,-1.087731 -7.93288,-0.0095"
       id="righttop5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 10.469021,33.128082 0.63623,1.101979 h 7.90475 l -0.65038,-1.126498 z"
       id="righttop6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 4.484701,27.653959 0.64421,1.104829 h -7.80544 l 0.64473,-1.105706 z"
       id="middletop1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -2.676529,28.758788 -0.64372,1.104 h 8.79384 0.2259 0.0807 l -0.65126,-1.104 z"
       id="middletop2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -3.320249,29.862788 -0.644022,1.104486 h 10.267252 0.10166 l -0.62446,-1.104486 z"
       id="middletop3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26361892px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -3.925207,30.967275 -0.637134,1.111639 h 11.465132 0.12188 l -0.65642,-1.111639 z"
       id="middletop4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -4.562342,32.078914 -0.639435,1.107532 h 12.834698 0.0207 l -0.62892,-1.107532 z"
       id="middletop5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -5.20178,33.186446 -0.641278,1.110726 h 13.943129 0.18397 l -0.63042,-1.110726 z"
       id="middletop6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -13.840416,27.558506 -0.642356,1.101648 h 7.808215 l 0.642594,-1.102057 z"
       id="lefttop1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -14.482772,28.660154 -0.643297,1.103263 0.643297,-1.103263 h 7.808215 l -0.639562,1.096862 h -7.809071 z"
       id="lefttop2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -15.126069,29.763417 -0.644695,1.105661 h 7.677571 0.101057 0.02903 l 0.648993,-1.112062 z"
       id="lefttop3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -15.770764,30.869078 -0.644492,1.105311 h 7.806715 l 0.636551,-1.091697 z"
       id="lefttop4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -16.415256,31.974389 -0.646997,1.109607 h 7.80625 l 0.647462,-1.109607 h -7.806715"
       id="lefttop5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.20551927px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -17.062253,33.083996 -0.644897,1.106009 h 7.803076 l 0.648071,-1.106009 z"
       id="lefttop6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 19.864771,35.943203 0.8523,1.609277 h -10.34341 l -0.85117,-1.607142 z"
       id="rightmiddle1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.368029px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 10.373661,37.552482 0.84363,1.608752 h 10.32397 l -0.82419,-1.608752 z"
       id="rightmiddle2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.368029px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 11.217291,39.161234 0.83938,1.600605 h 10.34504 l -0.83925,-1.600338 z"
       id="rightmiddle3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.368029px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 12.056671,40.761839 0.84076,1.603239 h 10.5661 l -0.85508,-1.630532 z"
       id="rightmiddle4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.368029px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 12.897431,42.365078 0.83977,1.601382 h 10.50914 l -0.83253,-1.587541 -10.51638,-0.01387"
       id="rightmiddle5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.368029px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 13.737201,43.96646 0.84343,1.608336 h 10.47909 l -0.86219,-1.644122 z"
       id="rightmiddle6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 5.803971,35.976989 0.854,1.612496 h -10.34743 l 0.85469,-1.613776 z"
       id="middlemiddle1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -3.689459,37.589485 -0.853362,1.611285 h 11.657722 0.29947 0.10698 l -0.86335,-1.611285 z"
       id="middlemiddle2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -4.542821,39.20077 -0.853762,1.611995 H 8.214401 8.349171 L 7.521341,39.20077 Z"
       id="middlemiddle3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36668751px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -5.344797,40.812767 -0.844629,1.622434 h 15.198987 0.16156 l -0.87019,-1.622434 z"
       id="middlemiddle4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.368029px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -6.189427,42.435201 -0.84768,1.616441 h 17.014568 0.0275 l -0.83374,-1.616441 z"
       id="middlemiddle5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.368029px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -7.037111,44.051642 -0.850124,1.621102 h 18.483986 0.24388 l -0.83572,-1.621102 z"
       id="middlemiddle6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -18.489098,35.837676 -0.851553,1.607852 h 10.351122 l 0.851867,-1.608449 z"
       id="leftmiddle1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -19.340651,37.445528 -0.8528,1.61021 0.8528,-1.61021 h 10.351122 l -0.847849,1.600868 h -10.352255 z"
       id="leftmiddle2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -20.193451,39.055738 -0.854653,1.61371 h 10.177931 0.133969 0.03848 l 0.860351,-1.623052 z"
       id="leftmiddle3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -21.048104,40.669448 -0.854383,1.613199 h 10.349132 l 0.843858,-1.593329 z"
       id="leftmiddle4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -21.902487,42.282647 -0.857706,1.619469 h 10.348518 l 0.85832,-1.619469 h -10.349132"
       id="leftmiddle5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.28587231px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -22.760193,43.902116 -0.854921,1.614218 h 10.344309 l 0.85913,-1.614218 z"
       id="leftmiddle6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 26.332381,47.797556 1.13854,2.155251 h -13.81724 l -1.13704,-2.152392 z"
       id="middlelowright1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.49225989px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 13.653681,49.952809 1.12697,2.154549 h 13.79128 l -1.10101,-2.154549 z"
       id="middlelowright2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.49225989px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 14.780651,52.107358 1.12128,2.143637 h 13.81941 l -1.1211,-2.14328 z"
       id="middlelowright3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.49225989px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 15.901931,54.250995 1.12313,2.147165 h 14.11472 l -1.14224,-2.183717 z"
       id="middlelowright4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.49225989px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 17.025061,56.39816 1.12181,2.144678 h 14.03863 l -1.11213,-2.126142 -14.04831,-0.01857"
       id="middlelowright5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.49225989px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 18.146871,58.542838 1.1267,2.153991 h 13.9985 l -1.15176,-2.201918 z"
       id="middlelowright6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 7.549251,47.842804 1.14083,2.159562 H -5.132542 l 1.141744,-2.161276 z"
       id="middlelowmiddle1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -5.132542,50.002366 -1.139966,2.157941 h 15.572989 0.40005 0.1429 l -1.1533,-2.157941 z"
       id="middlelowmiddle2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -6.272508,52.160307 -1.140493,2.158892 h 18.182252 0.18002 l -1.10585,-2.158892 z"
       id="middlelowmiddle3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.49046561px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -7.34383,54.319201 -1.128291,2.172873 h 20.303572 0.21583 l -1.16245,-2.172873 z"
       id="middlelowmiddle4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.49225989px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -8.472121,56.492074 -1.132383,2.164845 h 22.728935 0.0367 l -1.11376,-2.164845 z"
       id="middlelowmiddle5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.49225989px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -9.604504,58.656919 -1.135642,2.171089 h 24.691847 0.32579 l -1.1164,-2.171089 z"
       id="middlelowmiddle6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -24.902649,47.656226 -1.137535,2.153344 h 13.827537 l 1.137979,-2.154143 z"
       id="middlelowleft1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -26.040184,49.80957 -1.139218,2.156501 1.139218,-2.156501 h 13.827537 l -1.132594,2.143989 h -13.829061 z"
       id="middlelowleft2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -27.179402,51.966071 -1.14168,2.161188 h 13.596188 0.178949 0.05136 l 1.149312,-2.1737 z"
       id="middlelowleft3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -28.321082,54.127259 -1.141344,2.160504 h 13.8249 l 1.127264,-2.133893 z"
       id="middlelowleft4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -29.462426,56.287763 -1.145753,2.168902 h 13.824067 l 1.146586,-2.168902 h -13.8249"
       id="middlelowleft5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.38237062px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -30.608179,58.456665 -1.142051,2.161868 h 13.818453 l 1.147665,-2.161868 z"
       id="middlelowleft6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 34.875881,63.779208 1.52133,2.858154 h -18.46282 l -1.51934,-2.854363 z"
       id="lowright1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.65527982px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 17.934391,66.637364 1.50587,2.857223 h 18.42814 l -1.47119,-2.857223 z"
       id="lowright2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.65527982px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 19.440261,69.494587 1.49828,2.842752 h 18.46572 l -1.49803,-2.842278 z"
       id="lowright3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.65527982px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 20.938541,72.337339 1.50075,2.847431 h 18.86031 l -1.52627,-2.895903 z"
       id="lowright4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.65527982px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 22.439291,75.18477 1.49898,2.844133 h 18.75865 l -1.48605,-2.819552 -18.77158,-0.02463"
       id="lowright5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.65527982px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 23.938271,78.028903 1.50551,2.856483 h 18.70503 l -1.539,-2.920041 z"
       id="lowright6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 9.777551,63.839213 1.52439,2.86387 H -7.168072 l 1.525616,-2.866143 z"
       id="lowmiddle1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -7.168072,66.703083 -1.523242,2.861722 h 20.808885 0.53456 0.19094 l -1.54106,-2.861722 z"
       id="lowmiddle2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -8.691314,69.564805 -1.523946,2.862982 h 24.295431 0.24055 l -1.47766,-2.862982 z"
       id="lowmiddle3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.65289128px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -10.122832,72.42779 -1.507641,2.881523 h 27.129974 0.28839 l -1.55329,-2.881523 z"
       id="lowmiddle4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.65527982px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -11.630473,75.309313 -1.51311,2.870877 h 30.370784 0.0491 l -1.48822,-2.870877 z"
       id="lowmiddle5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.65527982px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -13.143583,78.18019 -1.517463,2.879157 h 32.993657 0.43533 l -1.49176,-2.879157 z"
       id="lowmiddle6"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -33.585218,63.591785 -1.519993,2.855625 h 18.476585 l 1.520586,-2.856685 z"
       id="lowleft1"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -35.105211,66.44741 -1.522242,2.859812 1.522242,-2.859812 h 18.476585 l -1.513391,2.843219 h -18.478622 z"
       id="lowleft2"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -36.627453,69.307222 -1.525533,2.866027 h 18.167454 0.239114 0.06863 l 1.535729,-2.88262 z"
       id="lowleft3"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -38.152986,72.173249 -1.525082,2.86512 h 18.473061 l 1.50627,-2.82983 z"
       id="lowleft4"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -39.678068,75.038369 -1.530974,2.876257 h 18.471946 l 1.532089,-2.876257 h -18.473061"
       id="lowleft5"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.50899893px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -41.209042,77.914626 -1.526028,2.866929 h 18.464447 l 1.533527,-2.866929 z"
       id="lowleft6"
       inkscape:connector-curvature="0" />
  </g>
</svg>

</body>
</html>