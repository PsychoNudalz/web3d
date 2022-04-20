<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coca Cola Thingy</title>


    <meta http-equiv='Content-Type' content='text/html;charset=utf-8'></meta>
    <link rel='stylesheet' type='text/css' href='node_modules/x3dom/x3dom.css'></link>
    <!--    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->
    <script type='text/javascript' src='node_modules/x3dom/x3dom.js'></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="sass/custom.css">
    <link rel="stylesheet" href="style.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>


    <script src="application/scripts/NavbarLoader.js"></script>
    <script type="text/javascript"> window.onload = function () {
            LoadNavbar();
        };</script>

    <script src="application/scripts/ModelLoader.js"></script>
    <script type="text/javascript"> window.onload = function () {
            LoadModel();
        };</script>


</head>
<body class="bg-primary">

<nav class="navbar navbar-expand-md navbar-orange bg-dark sticky-top " id="LoadNavbar">
</nav>
<x3d id='someUniqueId' showStat='false' showLog='false' x='0px' y='0px' width='400px' height='400px'>
    <scene DEF='scene'>
        <transform DEF='Model' id="MainModel">

        </transform>
        <transform DEF='Camera' rotation='0.128181 -0.924042 -0.360161 0.735286'
                   translation='-466.236 382.613 -358.493'>
            <viewpoint DEF='View_Camera' description='Camera' orientation='0 -1 0 1.5708' position='0 0 0'
                       fieldOfView='0.927295'></viewpoint>
        </transform>
        <timeSensor DEF='Timer' cycleInterval='3' loop='true'></timeSensor>
    </scene>
</x3d>

<div>
    <h1>Display stuff</h1>

</div>
</body>
</html>