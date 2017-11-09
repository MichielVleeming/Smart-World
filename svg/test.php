<script src="https://d3js.org/d3.v4.js"></script>
<html>
<body>
</form>
<body onload="color()">
    <?php
// Set array values to use later
$numbers = array(0, 0.5 , 1 , 1.5 , 0 , -5 , -5 , 1);
$SVG_paths = array("#L301", "#L101", "#L102" , "#L103", "#L201", "#L206", "#L302", "#R404");
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
     inkscape:zoom="0.46904828"
     inkscape:cx="1145.7712"
     inkscape:cy="439.78389"
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
       style="fill:#ff0000;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 104.64844,0.16607005 79.458407,67.15698 h 50.380073 z"
       id="T101"
       onclick="clickF(T101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1100" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 76.655169,77.308369 74.9993,81.829235 h 59.50473 l -1.64234,-4.483357 z"
       id="T102"
       onclick="clickF(T102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1102" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 75.167416,82.488543 -1.573506,4.295431 h 62.60651 l -1.60941,-4.39343 z"
       id="T103"
       onclick="clickF(T103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1104" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 73.710741,87.545196 -1.596226,4.357435 h 65.856045 l -1.60496,-4.381304 z"
       id="T104"
       onclick="clickF(T104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1106" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 72.36556,92.638192 -1.616754,4.397571 h 24.173053 l 0.599762,-4.479773 z"
       id="L101"
       onclick="clickF(L101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1108" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 61.191716,294.47399 0.745354,-4.38418 H 4.029856 l -1.5119967,4.38418 z"
       id="L408"
       onclick="clickF(L408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36401179px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 62.065124,289.37059 0.734644,-4.38418 H 5.724553 l -1.490273,4.38418 z"
       id="L407"
       onclick="clickF(L407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36114627px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 62.921485,284.40519 0.723123,-4.38418 H 7.4644534 l -1.4669013,4.38418 z"
       id="L406"
       onclick="clickF(L406)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.3585425px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 63.768842,279.30179 0.712733,-4.38418 H 9.1086065 l -1.4458256,4.38418 z"
       id="L405"
       onclick="clickF(L405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.35650125px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 64.843807,274.05454 0.704641,-4.38417 H 10.804175 l -1.4294087,4.38417 z"
       id="L404"
       onclick="clickF(L404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-2" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.35260034px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 65.67472,268.95114 0.689306,-4.38417 H 12.811245 l -1.398301,4.38417 z"
       id="L403"
       onclick="clickF(L403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.34968957px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 66.484746,263.98574 0.677974,-4.38417 H 14.490449 l -1.375308,4.38417 z"
       id="L402"
       onclick="clickF(L402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.34624544px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 67.289288,258.88234 0.664682,-4.38417 H 16.314155 l -1.34835,4.38417 z"
       id="L401"
       onclick="clickF(L401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 19.979568,243.74906 h 49.778325 l 0.834455,-4.30624 H 21.510003 Z"
       id="L310"
       onclick="clickF(L310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1328" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="M 71.478952,234.32604 70.696653,238.888 H 21.786588 l 1.731367,-4.72636 z"
       id="L309"
       onclick="clickF(L309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1330" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 71.534941,233.72296 0.792876,-4.41731 H 25.068723 l -1.492574,4.37309 z"
       id="L308"
       onclick="clickF(L308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1350" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 25.336325,228.65441 1.499408,-4.47976 46.303399,0.0743 -0.714513,4.3955 z"
       id="L307"
       onclick="clickF(L307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1354" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 28.56983,219.11951 -1.499408,4.33592 46.21622,0.15431 0.719122,-4.4173 z"
       id="L306"
       onclick="clickF(L306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1356" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 30.362599,214.01298 -1.545042,4.46949 h 45.321211 l 0.734298,-4.3191 z"
       id="L305"
       onclick="clickF(L305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1358" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 32.168407,208.90647 -1.614087,4.50272 h 44.425422 l 0.746523,-4.39103 z"
       id="L304"
       onclick="clickF(L304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1360" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 33.937873,203.84806 -1.576534,4.50448 h 43.49849 l 0.748234,-4.40109 z"
       id="L303"
       onclick="clickF(L303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1362" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 35.61582,198.87858 -1.493559,4.3592 H 76.72551 l 0.756,-4.30107 z"
       id="L302"
       onclick="clickF(L302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1364" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 37.385958,193.7493 -1.530433,4.46089 h 41.7384 l 0.734125,-4.31811 z"
       id="L301"
       onclick="clickF(L301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1366" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 42.613408,178.53576 -1.567311,4.53355 39.135938,0.0174 0.749702,-4.42838 z"
       id="L208"
       onclick="clickF(L208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1368" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 44.36511,173.45005 -1.521212,4.57715 38.179106,-0.0578 0.749706,-4.38729 z"
       id="L207"
       onclick="clickF(L207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1370" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 82.773494,167.89936 0.709901,-4.44635 H 47.905396 l -1.571038,4.28866 z"
       id="L205"
       onclick="clickF(L205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1374" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 84.360815,158.45779 c -0.01303,0.0821 -0.795337,4.35648 -0.795337,4.35648 H 48.114276 l 1.525482,-4.52087 z"
       id="L204"
       onclick="clickF(L204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1376" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 85.207439,153.32518 -0.783656,4.47542 H 49.835335 l 1.518965,-4.51096 z"
       id="L203"
       onclick="clickF(L203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1378" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 85.299634,152.64224 0.783658,-4.35917 H 53.151283 l -1.580872,4.31552 z"
       id="L202"
       onclick="clickF(L202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1380" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 86.192702,147.70021 0.743183,-4.49004 H 54.838448 l -1.456679,4.36089 z"
       id="L201"
       onclick="clickF(L201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1382" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 88.793848,132.50396 0.700654,-4.49107 H 60.103016 l -1.525485,4.44996 z"
       id="L108"
       onclick="clickF(L108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1384" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 89.660453,127.37354 0.719116,-4.47542 H 61.889265 l -1.542173,4.50449 z"
       id="L107"
       onclick="clickF(L107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1386" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.232376,117.87054 -0.756001,4.48995 H 62.110319 l 1.516606,-4.50085 z"
       id="L106"
       onclick="clickF(L106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1388" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.313502,117.2666 0.762744,-4.46434 h -26.69923 l -1.522223,4.42325 z"
       id="L105"
       onclick="clickF(L105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1390" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 92.196849,112.20118 0.782298,-4.35646 H 67.104594 l -1.486367,4.3462 z"
       id="L104"
       onclick="clickF(L104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1392" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 93.044002,107.14696 0.765219,-4.38824 -24.966371,-0.007 -1.47097,4.36377 z"
       id="L103"
       onclick="clickF(L103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1394" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 93.938293,101.95953 0.719122,-4.286518 H 70.585332 l -1.493557,4.388248 z"
       id="L102"
       onclick="clickF(L102)"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 138.15495,93.065072 1.61676,4.397571 h -24.17307 l -0.59975,-4.479774 z"
       id="R101"
       onclick="clickF(R101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1108-4" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 149.3288,294.90087 -0.74536,-4.38418 h 57.90721 l 1.512,4.38418 z"
       id="R408"
       onclick="clickF(R408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36401179px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 148.45538,289.79747 -0.73464,-4.38418 h 57.07522 l 1.49027,4.38418 z"
       id="R407"
       onclick="clickF(R407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36114627px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 147.87203,285.41329 -0.72313,-4.38417 h 56.18016 l 1.4669,4.38417 z"
       id="R406"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-60" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.3585425px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 146.94999,280.44789 -0.71273,-4.38417 h 55.37297 l 1.44582,4.38417 z"
       id="R405"
       onclick="clickF(R405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-54" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.35650125px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 145.6767,274.48142 -0.70464,-4.38417 h 54.74428 l 1.4294,4.38417 z"
       id="R404"
       onclick="clickF(R404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-2-2" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.35260034px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 144.8458,269.37802 -0.68931,-4.38417 h 53.55278 l 1.39829,4.38417 z"
       id="R403"
       onclick="clickF(R403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-0-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.34968957px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 144.03575,264.41262 -0.67796,-4.38416 h 52.67227 l 1.3753,4.38416 z"
       id="R402"
       onclick="clickF(R402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-1-6-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.34624544px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 143.23122,259.30922 -0.66468,-4.38417 h 51.63981 l 1.34835,4.38417 z"
       id="R401"
       onclick="clickF(R401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1204-3-2-5-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 190.54094,244.17593 h -49.77833 l -0.83445,-4.30623 h 49.08234 z"
       id="R310"
       onclick="clickF(R310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1328-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 139.04156,234.75292 0.7823,4.56196 h 48.91006 l -1.73138,-4.72636 z"
       id="R309"
       onclick="clickF(R309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1330-4" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 138.98557,234.14984 -0.79288,-4.41731 h 47.25909 l 1.49257,4.37309 z"
       id="R308"
       onclick="clickF(R308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1350-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 185.18418,229.08129 -1.49941,-4.47974 -46.3034,0.0743 0.71452,4.3955 z"
       id="R307"
       onclick="clickF(R307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1354-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 181.95068,219.54639 1.4994,4.33592 -46.21621,0.15431 -0.71913,-4.4173 z"
       id="R306"
       onclick="clickF(R306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1356-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 180.1579,214.43986 1.54505,4.46949 h -45.32121 l -0.73429,-4.3191 z"
       id="R305"
       onclick="clickF(R305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1358-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 178.35211,209.33335 1.61408,4.50272 h -44.42542 l -0.74653,-4.39103 z"
       id="R304"
       onclick="clickF(R304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1360-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 176.58264,204.27494 1.57652,4.50448 h -43.49848 l -0.74824,-4.40109 z"
       id="R303"
       onclick="clickF(R303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1362-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 174.90468,199.30546 1.49356,4.3592 h -42.60325 l -0.756,-4.30107 z"
       id="R302"
       onclick="clickF(R302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1364-5" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 173.13455,194.17618 1.53043,4.46089 h -41.7384 l -0.73412,-4.31811 z"
       id="R301"
       onclick="clickF(R301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1366-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 167.9071,178.96264 1.56731,4.53355 -39.13594,0.0174 -0.7497,-4.42836 z"
       id="R208"
       onclick="clickF(R208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1368-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 166.15539,173.87693 1.52122,4.57715 -38.1791,-0.0578 -0.74971,-4.38729 z"
       id="R207"
       onclick="clickF(R207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1370-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 164.3576,168.86388 1.56731,4.50449 h -37.2749 l -0.7601,-4.49722 c 0,0 36.51546,0.0671 36.46769,-0.007 z"
       id="R206"
       onclick="clickF(R206)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1372-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 127.74701,168.32624 -0.7099,-4.44635 h 35.57801 l 1.57102,4.28866 z"
       id="R205"
       onclick="clickF(R205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1374-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 126.15969,158.88467 c 0.013,0.0821 0.79533,4.35648 0.79533,4.35648 h 35.45122 l -1.5255,-4.52087 z"
       id="R204"
       onclick="clickF(R204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1376-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 125.31307,153.75206 0.78366,4.47542 h 34.58845 l -1.51897,-4.51096 z"
       id="R203"
       onclick="clickF(R203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1378-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 125.22088,153.06912 -0.78366,-4.35917 h 32.932 l 1.58088,4.31552 z"
       id="R202"
       onclick="clickF(R202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1380-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 124.3278,148.12709 -0.74318,-4.49004 h 32.09745 l 1.45667,4.36089 z"
       id="R201"
       onclick="clickF(R201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1382-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 121.72666,132.93084 -0.70065,-4.49107 h 29.39148 l 1.52549,4.44996 z"
       id="R108"
       onclick="clickF(R108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1384-6" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 120.86006,127.80042 -0.71913,-4.47542 h 28.49031 l 1.54217,4.50449 z"
       id="R107"
       onclick="clickF(R107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1386-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 119.28813,118.29741 0.756,4.48996 h 28.36606 l -1.51661,-4.50085 z"
       id="R106"
       onclick="clickF(R106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1388-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 119.20701,117.69348 -0.76275,-4.46434 h 26.69923 l 1.52223,4.42325 z"
       id="R105"
       onclick="clickF(R105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1390-9" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 118.32366,112.62806 -0.78229,-4.35646 h 25.87454 l 1.48637,4.3462 z"
       id="R104"
       onclick="clickF(R104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1392-8" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 117.47651,107.57384 -0.76523,-4.38824 24.96637,-0.007 1.47097,4.36377 z"
       id="R103"
       onclick="clickF(R103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1394-0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 116.58221,102.38641 -0.71912,-4.286519 h 24.07209 l 1.49355,4.388249 z"
       id="R102"
       onclick="clickF(R102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1396-1" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 76.107804,294.3446 0.442536,-4.47545 h 57.08706 l 0.44253,4.47545 z"
       id="M408"
       onclick="clickF(M408)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1512" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 77.085431,285.0213 -0.488937,4.3051 56.827536,-0.13361 -0.39116,-4.2537 z"
       id="M407"
       onclick="clickF(M407)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1514" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 78.172969,274.93172 -0.497851,4.35919 54.800632,0.0437 -0.50707,-4.35919 z"
       id="M405"
       onclick="clickF(M405)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1516" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 77.527606,279.98836 -0.497852,4.12669 55.870096,0.0872 -0.36878,-4.21387 z"
       id="M406"
       onclick="clickF(M406)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1518" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 78.689262,269.67162 -0.516293,4.21387 h 53.694291 l -0.49786,-3.95232 z"
       id="M404"
       onclick="clickF(M404)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1520" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 79.371505,264.81843 -0.645365,4.15573 52.44044,-0.029 -0.46098,-4.21386 z"
       id="M403"
       onclick="clickF(M403)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1528" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 79.924672,259.81989 -0.626925,4.06858 51.531653,0.0698 -0.58672,-4.31537 z"
       id="M402"
       onclick="clickF(M402)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1530" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 80.51472,254.70514 -0.590048,4.09761 50.283078,0.11621 -0.51628,-4.35917 z"
       id="M401"
       onclick="clickF(M401)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1532" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 82.358617,239.38988 -0.553168,4.4173 46.484651,-0.11621 -0.51629,-4.30105 z"
       id="M310"
       onclick="clickF(M310)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1534" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 83.040859,234.47855 -0.55317,4.06857 45.249241,0.029 -0.68224,-4.21387 z"
       id="M309"
       onclick="clickF(M309)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1536" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 126.61802,229.29145 0.40418,4.43866 -43.932619,-0.0308 0.371593,-4.36674 z"
       id="M308"
       onclick="clickF(M308)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1542" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 126.60499,228.65441 -0.49547,-4.37701 H 84.034857 l -0.495456,4.23317 z"
       id="M307"
       onclick="clickF(M307)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1544" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 125.45972,219.1633 0.50707,4.35918 -41.699738,0.0437 0.414875,-4.33013 z"
       id="M306"
       onclick="clickF(M306)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1546" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 124.6945,214.19383 0.61771,4.14122 -40.534166,0.0447 0.53457,-4.37701 z"
       id="M305"
       onclick="clickF(M305)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1548" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 124.63918,213.20576 -0.27658,-4.01044 -38.592772,-0.0872 -0.424096,3.92326 z"
       id="M304"
       onclick="clickF(M304)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1550" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 86.212257,204.01573 -0.39115,4.27426 38.523053,-0.11186 -0.31346,-4.06855 z"
       id="M303"
       onclick="clickF(M303)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1552" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 86.710215,199.05296 -0.331901,4.12669 37.440336,0.0435 -0.32268,-4.31558 z"
       id="M302"
       onclick="clickF(M302)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1554" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 87.337142,193.88007 -0.36878,4.272 36.181458,-0.0546 -0.29988,-4.21262 z"
       id="M301"
       onclick="clickF(M301)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1556" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 89.291673,178.68106 -0.424098,4.47542 32.323525,-0.0581 -0.33191,-4.35919 z"
       id="M208"
       onclick="clickF(M208)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1558" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 89.586695,173.7988 -0.295022,4.21387 31.622837,-0.0872 -0.36878,-4.24293 z"
       id="M207"
       onclick="clickF(M207)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1560" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 90.305816,168.68402 -0.590047,4.21387 h 30.774651 l -0.5163,-4.33012 z"
       id="M206"
       onclick="clickF(M206)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1562" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 90.729912,163.48207 -0.387217,4.41729 29.483925,-0.11621 -0.44254,-4.272 z"
       id="M205"
       onclick="clickF(M205)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1564" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.375277,158.51261 -0.553172,4.21387 h 28.396015 l -0.40565,-4.21387 z"
       id="M204"
       onclick="clickF(M204)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1566" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 91.983762,153.60128 -0.36878,4.12667 26.920908,-0.14527 -0.31346,-4.27199 z"
       id="M203"
       onclick="clickF(M203)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1568" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 92.500054,148.42837 -0.405657,4.06857 25.980513,0.17438 -0.40565,-4.44637 z"
       id="M202"
       onclick="clickF(M202)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1570" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 93.126978,143.19736 -0.460974,4.4173 24.947926,-0.0872 -0.55317,-4.27199 z"
       id="M201"
       onclick="clickF(M201)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1572" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 95.026193,128.05648 -0.479413,4.35919 21.13106,-0.0581 -0.42409,-4.30107 H 94.933997 Z"
       id="M108"
       onclick="clickF(M108)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1574" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 95.708434,122.99984 -0.553168,3.98137 19.785014,0.29063 -0.42409,-4.30105 z"
       id="M107"
       onclick="clickF(M107)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1576" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 96.427553,117.97226 -0.553165,4.35917 c 0,0 18.641802,-0.0581 18.494292,-0.14527 -0.14753,-0.0872 -0.60849,-4.24294 -0.60849,-4.24294 z"
       id="M106"
       onclick="clickF(M106)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1578" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 96.925409,112.88655 -0.405662,4.01045 17.056043,0.0872 -0.36876,-4.06857 z"
       id="M105"
       onclick="clickF(M105)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1580" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 97.275747,107.74272 -0.405651,4.272 16.226294,0.0581 -0.2766,-4.18481 z"
       id="M104"
       onclick="clickF(M104)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1582" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 112.34039,102.88949 c 0.0553,0.40686 0.3319,4.06857 0.3319,4.06857 l -15.212146,0.0581 0.368771,-4.272 z"
       id="M103"
       onclick="clickF(M103)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1584" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 111.84253,97.687538 0.36878,4.271992 -14.253322,0.0581 0.479421,-4.271994 z"
       id="M102"
       onclick="clickF(M102)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1586" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 111.10497,92.601832 0.53474,4.359192 -13.03636,-0.08716 0.331903,-4.271996 z"
       id="M101"
       onclick="clickF(M101)"
       inkscape:connector-curvature="0"
       inkscape:label="#path1588" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.36665538px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 44.584741,172.78257 h 37.274897 l 0.760098,-4.49723 -36.467684,-0.007 z"
       id="L206"
       onclick="clickF(L206)"
       inkscape:connector-curvature="0" />
  </g>
</svg>

</body>
</html>