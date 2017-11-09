<?php include("../Controller/pyramid.php") ?>

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
    .range(["#660000", "#ffff1a", "#00ff00"]);
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
     inkscape:zoom="5.3066755"
     inkscape:cx="646.56831"
     inkscape:cy="61.580066"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
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
        <dc:title />
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Laag 1"
     inkscape:groupmode="layer"
     id="layer1">
    <path
       style="fill:Red;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 107.43973,124.26488 84.619419,162.7712 h 45.640621 z"
       id="T101"
       onclick="clickF(T101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1100" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 82.079893,168.60621 -1.500095,2.59859 h 53.906882 l -1.48784,-2.57703 z"
       id="T102"
       onclick="clickF(T102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1102" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 80.7321,171.58377 -1.42548,2.46901 h 56.71686 l -1.458,-2.52534 z"
       id="T103"
       onclick="clickF(T103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1104" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 79.412459,174.49033 -1.446062,2.50465 H 137.6271 l -1.45398,-2.51837 z"
       id="T104"
       onclick="clickF(T104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1106" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 78.193825,177.41778 -1.464659,2.52772 h 21.898996 l 0.54334,-2.57497 z"
       id="L101"
       onclick="clickF(L101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1108" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 68.07115,293.43283 0.675235,-2.52002 H 16.286737 l -1.369757,2.52002 z"
       id="L408"
       onclick="clickF(L408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.2626757px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 68.862393,290.4994 0.665533,-2.52002 H 17.822007 l -1.350077,2.52002 z"
       id="L407"
       onclick="clickF(L407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.2606079px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 69.638192,287.64529 0.655096,-2.52002 h -50.89506 l -1.328904,2.52002 z"
       id="L406"
       onclick="clickF(L406)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.25872895px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 70.405835,284.71186 0.645684,-2.52002 h -50.16381 l -1.309811,2.52002 z"
       id="L405"
       onclick="clickF(L405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.25725597px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 71.379674,281.69575 0.638353,-2.52002 H 22.423769 l -1.294939,2.52002 z"
       id="L404"
       onclick="clickF(L404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-2" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.25444102px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 72.13242,278.76232 0.624459,-2.52002 H 24.242025 l -1.266757,2.52002 z"
       id="L403"
       onclick="clickF(L403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.25234058px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 72.866243,275.90821 0.614194,-2.52002 H 25.76326 l -1.245927,2.52002 z"
       id="L402"
       onclick="clickF(L402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.24985527px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 73.595098,272.97478 0.602153,-2.52002 H 27.415403 l -1.221506,2.52002 z"
       id="L401"
       onclick="clickF(L401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 30.735995,264.27618 h 45.095477 l 0.755954,-2.47522 h -44.46497 z"
       id="L310"
       onclick="clickF(L310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1328" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 77.390624,258.85984 -0.708705,2.62221 H 32.373022 l 1.56849,-2.71671 z"
       id="L309"
       onclick="clickF(L309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1330" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 77.441345,258.51319 0.718288,-2.53907 h -42.81324 l -1.352161,2.51365 z"
       id="L308"
       onclick="clickF(L308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1350" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 35.588821,255.59979 1.358352,-2.57496 41.947451,0.0427 -0.647295,2.52653 z"
       id="L307"
       onclick="clickF(L307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1354" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 38.518136,250.11914 -1.358352,2.49228 41.868473,0.0887 0.651471,-2.53906 z"
       id="L306"
       onclick="clickF(L306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1356" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 40.142252,247.18391 -1.399693,2.56906 h 41.057662 l 0.665219,-2.48262 z"
       id="L305"
       onclick="clickF(L305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1358" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 41.778181,244.24869 -1.462243,2.58816 h 40.246143 l 0.676294,-2.52396 z"
       id="L304"
       onclick="clickF(L304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1360" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 43.381186,241.34112 -1.428223,2.58917 h 39.406411 l 0.677844,-2.52974 z"
       id="L303"
       onclick="clickF(L303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1362" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 44.901281,238.48467 -1.353053,2.50566 h 38.595389 l 0.68488,-2.47225 z"
       id="L302"
       onclick="clickF(L302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1364" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 46.504896,235.53636 -1.386459,2.56412 h 37.8119 l 0.665062,-2.48205 z"
       id="L301"
       onclick="clickF(L301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1366" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 51.240578,226.79163 -1.419868,2.60588 35.454262,0.01 0.679175,-2.54543 z"
       id="L208"
       onclick="clickF(L208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1368" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 52.827491,223.86837 -1.378106,2.63094 34.587444,-0.0332 0.679177,-2.52181 z"
       id="L207"
       onclick="clickF(L207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1370" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 87.622643,220.67784 0.643118,-2.55576 H 56.034728 l -1.423244,2.46512 z"
       id="L205"
       onclick="clickF(L205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1374" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 89.060638,215.25083 c -0.0118,0.0472 -0.720516,2.5041 -0.720516,2.5041 H 56.223958 l 1.381974,-2.59859 z"
       id="L204"
       onclick="clickF(L204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1376" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 89.827617,212.30061 -0.709935,2.57247 H 57.78311 l 1.376069,-2.5929 z"
       id="L203"
       onclick="clickF(L203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1378" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 89.911138,211.90806 0.709936,-2.50565 H 60.787113 l -1.432153,2.48056 z"
       id="L202"
       onclick="clickF(L202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1380" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 90.720192,209.06738 0.673269,-2.58087 H 62.31556 l -1.319644,2.50664 z"
       id="L201"
       onclick="clickF(L201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1382" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 93.076637,200.33259 0.634741,-2.58146 h -26.62651 l -1.381977,2.55783 z"
       id="L108"
       onclick="clickF(L108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1384" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 93.861717,197.38363 0.651467,-2.57247 H 68.703078 l -1.397095,2.58918 z"
       id="L107"
       onclick="clickF(L107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1386" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 95.285763,191.92131 -0.68488,2.58082 H 68.903336 l 1.373933,-2.58708 z"
       id="L106"
       onclick="clickF(L106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1388" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 95.359258,191.57417 0.690989,-2.5661 H 71.862722 l -1.379022,2.54248 z"
       id="L105"
       onclick="clickF(L105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1390" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 96.159504,188.66257 0.708705,-2.50409 H 73.42778 l -1.346539,2.49819 z"
       id="L104"
       onclick="clickF(L104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1392" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 96.926962,185.75741 0.693232,-2.52236 -22.617683,-0.004 -1.33259,2.50829 z"
       id="L103"
       onclick="clickF(L103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1394" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 97.737124,182.77568 0.651471,-2.46389 H 76.58107 l -1.353052,2.52236 z"
       id="L102"
       onclick="clickF(L102)"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 137.79414,177.66315 1.46466,2.52772 h -21.899 l -0.54333,-2.57497 z"
       id="R101"
       onclick="clickF(R101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1108-4" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 147.91682,293.6782 -0.67524,-2.52002 h 52.45965 l 1.36976,2.52002 z"
       id="R408"
       onclick="clickF(R408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.2626757px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 147.12557,290.74477 -0.66553,-2.52002 h 51.70592 l 1.35008,2.52002 z"
       id="R407"
       onclick="clickF(R407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.2606079px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 146.5971,288.22475 -0.6551,-2.52002 h 50.89506 l 1.3289,2.52002 z"
       id="R406"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-60" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.25872895px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 145.7618,285.37064 -0.64568,-2.52002 h 50.16381 l 1.30981,2.52002 z"
       id="R405"
       onclick="clickF(R405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-54" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.25725597px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 144.60829,281.94112 -0.63835,-2.52002 h 49.59426 l 1.29494,2.52002 z"
       id="R404"
       onclick="clickF(R404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-2-2" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.25444102px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 143.85555,279.00769 -0.62446,-2.52002 h 48.51485 l 1.26676,2.52002 z"
       id="R403"
       onclick="clickF(R403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-0-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.25234058px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 143.12172,276.15358 -0.61419,-2.52001 h 47.71718 l 1.24592,2.52001 z"
       id="R402"
       onclick="clickF(R402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-6-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.24985527px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 142.39287,273.22015 -0.60215,-2.52002 h 46.78184 l 1.22151,2.52002 z"
       id="R401"
       onclick="clickF(R401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-5-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 185.25197,264.52155 h -45.09548 l -0.75595,-2.47522 h 44.46497 z"
       id="R310"
       onclick="clickF(R310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1328-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 138.59734,259.10521 0.70871,2.62221 h 44.30889 l -1.56849,-2.71671 z"
       id="R309"
       onclick="clickF(R309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1330-4" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 138.54662,258.75856 -0.71829,-2.53907 h 42.81324 l 1.35216,2.51365 z"
       id="R308"
       onclick="clickF(R308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1350-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 180.39915,255.84516 -1.35836,-2.57495 -41.94745,0.0427 0.6473,2.52653 z"
       id="R307"
       onclick="clickF(R307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1354-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 177.46983,250.36451 1.35835,2.49228 -41.86847,0.0887 -0.65147,-2.53906 z"
       id="R306"
       onclick="clickF(R306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1356-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 175.84571,247.42928 1.3997,2.56906 h -41.05766 l -0.66522,-2.48262 z"
       id="R305"
       onclick="clickF(R305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1358-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 174.20979,244.49406 1.46224,2.58816 h -40.24614 l -0.6763,-2.52396 z"
       id="R304"
       onclick="clickF(R304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1360-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 172.60678,241.58649 1.42822,2.58917 h -39.40641 l -0.67784,-2.52974 z"
       id="R303"
       onclick="clickF(R303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1362-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 171.08668,238.73004 1.35306,2.50566 h -38.59539 l -0.68488,-2.47225 z"
       id="R302"
       onclick="clickF(R302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1364-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 169.48307,235.78173 1.38646,2.56412 h -37.8119 l -0.66506,-2.48205 z"
       id="R301"
       onclick="clickF(R301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1366-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 164.74739,227.037 1.41987,2.60588 -35.45427,0.01 -0.67917,-2.54542 z"
       id="R208"
       onclick="clickF(R208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1368-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 163.16047,224.11374 1.37811,2.63094 -34.58744,-0.0332 -0.67918,-2.52181 z"
       id="R207"
       onclick="clickF(R207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1370-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 161.5318,221.23224 1.41987,2.58918 h -33.7683 l -0.68859,-2.585 c 0,0 33.0803,0.0386 33.03702,-0.004 z"
       id="R206"
       onclick="clickF(R206)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1372-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 128.36532,220.92321 -0.64312,-2.55576 h 32.23104 l 1.42324,2.46512 z"
       id="R205"
       onclick="clickF(R205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1374-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 126.92733,215.4962 c 0.0118,0.0472 0.72051,2.5041 0.72051,2.5041 h 32.11617 l -1.38198,-2.59859 z"
       id="R204"
       onclick="clickF(R204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1376-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 126.16035,212.54598 0.70994,2.57247 h 31.33457 l -1.37607,-2.5929 z"
       id="R203"
       onclick="clickF(R203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1378-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 126.07683,212.15343 -0.70994,-2.50565 h 29.83396 l 1.43216,2.48056 z"
       id="R202"
       onclick="clickF(R202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1380-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 125.26777,209.31275 -0.67326,-2.58087 h 29.0779 l 1.31964,2.50664 z"
       id="R201"
       onclick="clickF(R201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1382-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 122.91133,200.57796 -0.63474,-2.58146 h 26.62651 l 1.38197,2.55783 z"
       id="R108"
       onclick="clickF(R108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1384-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 122.12625,197.629 -0.65147,-2.57247 h 25.81011 l 1.39709,2.58918 z"
       id="R107"
       onclick="clickF(R107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1386-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 120.7022,192.16668 0.68488,2.58082 h 25.69755 l -1.37393,-2.58708 z"
       id="R106"
       onclick="clickF(R106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1388-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 120.62871,191.81954 -0.69099,-2.5661 h 24.18752 l 1.37903,2.54248 z"
       id="R105"
       onclick="clickF(R105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1390-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 119.82846,188.90794 -0.7087,-2.50409 h 23.44043 l 1.34653,2.49819 z"
       id="R104"
       onclick="clickF(R104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1392-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 119.06101,186.00278 -0.69324,-2.52236 22.61768,-0.004 1.33259,2.50829 z"
       id="R103"
       onclick="clickF(R103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1394-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 118.25084,183.02105 -0.65147,-2.46389 h 21.80753 l 1.35305,2.52236 z"
       id="R102"
       onclick="clickF(R102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1396-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 81.584021,293.35846 0.400905,-2.57249 h 51.716654 l 0.4009,2.57249 z"
       id="M408"
       onclick="clickF(M408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1512" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 82.469679,287.99943 -0.442941,2.47457 51.481542,-0.0768 -0.35436,-2.44502 z"
       id="M407"
       onclick="clickF(M407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1514" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 83.454908,282.19995 -0.451016,2.50566 49.645318,0.0251 -0.45937,-2.50566 z"
       id="M405"
       onclick="clickF(M405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1516" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 82.870256,285.1065 -0.451017,2.37202 50.614171,0.0501 -0.33409,-2.42213 z"
       id="M406"
       onclick="clickF(M406)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1518" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 83.922631,279.17645 -0.467723,2.42213 h 48.643052 l -0.45102,-2.27179 z"
       id="M404"
       onclick="clickF(M404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1520" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 84.540692,276.38684 -0.584652,2.38871 47.50716,-0.0167 -0.41761,-2.42212 z"
       id="M403"
       onclick="clickF(M403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1528" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 85.041821,273.51368 -0.567947,2.33862 46.683866,0.0401 -0.53153,-2.48047 z"
       id="M402"
       onclick="clickF(M402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1530" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 85.576361,270.57373 -0.53454,2.3553 45.552749,0.0668 -0.46772,-2.50565 z"
       id="M401"
       onclick="clickF(M401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1532" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 87.246795,261.77053 -0.501129,2.53906 42.111654,-0.0668 -0.46772,-2.47224 z"
       id="M310"
       onclick="clickF(M310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1534" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 87.864856,258.9475 -0.501131,2.33861 40.992465,0.0167 -0.61806,-2.42213 z"
       id="M309"
       onclick="clickF(M309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1536" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 127.34254,255.96596 0.36616,2.55134 -39.799706,-0.0177 0.336635,-2.51 z"
       id="M308"
       onclick="clickF(M308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1542" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 127.33073,255.59979 -0.44885,-2.5159 H 88.765344 l -0.448847,2.43322 z"
       id="M307"
       onclick="clickF(M307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1544" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 126.2932,250.14431 0.45937,2.50565 -37.776874,0.0251 0.375846,-2.48895 z"
       id="M306"
       onclick="clickF(M306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1546" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 125.59997,247.28786 0.5596,2.38037 -36.720954,0.0257 0.484281,-2.5159 z"
       id="M305"
       onclick="clickF(M305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1548" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 125.54986,246.71992 -0.25057,-2.3052 -34.962191,-0.0501 -0.384199,2.25509 z"
       id="M304"
       onclick="clickF(M304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1550" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 90.737908,241.4375 -0.354353,2.45684 34.899035,-0.0643 -0.28397,-2.3386 z"
       id="M303"
       onclick="clickF(M303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1552" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.18902,238.5849 -0.300677,2.37202 33.918177,0.025 -0.29233,-2.48059 z"
       id="M302"
       onclick="clickF(M302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1554" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.75697,235.61153 -0.334087,2.45554 32.777727,-0.0314 -0.27167,-2.42141 z"
       id="M301"
       onclick="clickF(M301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1556" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 93.52763,226.87515 -0.384201,2.57247 29.282721,-0.0334 -0.30068,-2.50566 z"
       id="M208"
       onclick="clickF(M208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1558" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 93.794899,224.06883 -0.267269,2.42213 28.64795,-0.0501 -0.33409,-2.43883 z"
       id="M207"
       onclick="clickF(M207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1560" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 94.446369,221.12886 -0.53454,2.42213 h 27.879551 l -0.46772,-2.48895 z"
       id="M206"
       onclick="clickF(M206)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1562" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 94.830568,218.13878 -0.35079,2.53906 26.710252,-0.0668 -0.40091,-2.45554 z"
       id="M205"
       onclick="clickF(M205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1564" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 95.415221,215.28234 -0.501132,2.42213 h 25.724691 l -0.36749,-2.42213 z"
       id="M204"
       onclick="clickF(M204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1566" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 95.966464,212.45931 -0.334087,2.37201 24.388343,-0.0835 -0.28397,-2.45554 z"
       id="M203"
       onclick="clickF(M203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1568" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 96.434186,209.48593 -0.367495,2.33861 23.536419,0.10023 -0.36749,-2.55577 z"
       id="M202"
       onclick="clickF(M202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1570" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 97.002133,206.47915 -0.417608,2.53906 22.600975,-0.0501 -0.50113,-2.45554 z"
       id="M201"
       onclick="clickF(M201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1572" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 98.722681,197.77618 -0.434313,2.50566 19.143182,-0.0334 -0.3842,-2.47225 H 98.639158 Z"
       id="M108"
       onclick="clickF(M108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1574" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 99.34074,194.86963 -0.501129,2.28849 17.923759,0.16705 -0.3842,-2.47224 z"
       id="M107"
       onclick="clickF(M107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1576" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 99.99221,191.97978 -0.501128,2.50565 c 0,0 16.888088,-0.0334 16.754458,-0.0835 -0.13364,-0.0501 -0.55125,-2.43884 -0.55125,-2.43884 z"
       id="M106"
       onclick="clickF(M106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1578" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 100.44323,189.05652 -0.3675,2.3052 15.45152,0.0501 -0.33408,-2.33861 z"
       id="M105"
       onclick="clickF(M105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1580" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 100.76061,186.09985 -0.36749,2.45554 14.69982,0.0334 -0.25057,-2.40543 z"
       id="M104"
       onclick="clickF(M104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1582" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 114.40806,183.31022 c 0.0501,0.23386 0.30068,2.33861 0.30068,2.33861 l -13.78108,0.0334 0.33408,-2.45554 z"
       id="M103"
       onclick="clickF(M103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1584" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 113.95704,180.32014 0.33409,2.45554 -12.91246,0.0334 0.43432,-2.45554 z"
       id="M102"
       onclick="clickF(M102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1586" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 113.28887,177.39688 0.48443,2.50566 -11.80998,-0.0501 0.30068,-2.45554 z"
       id="M101"
       onclick="clickF(M101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1588" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 53.02646,223.4847 h 33.768297 l 0.688592,-2.585 -33.037021,-0.004 z"
       id="L206"
       onclick="clickF(L206)"
       inkscape:connector-curvature="0" />
  </g>
</svg>
</body>
</html>