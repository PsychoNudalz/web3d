<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coca Cola Thingy</title>


    <meta http-equiv='Content-Type' content='text/html;charset=utf-8'></meta>
    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/x3dom/release/x3dom.css'></link>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>

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

</head>
<body class="bg-primary">

<nav class="navbar navbar-expand-md navbar-orange bg-dark sticky-top " id="LoadNavbar">
</nav>


<script src="application/scripts/ModelLoader.js"></script>

<form style='margin:5px; padding:10px;'>
    <select id="selectMesh" onclick="LoadMesh()" ">
    <option value="Can">Can</option>
    <option value="TestBox">TestBox</option>

    </select>
    <select id="selectTexture" onclick="LoadTexture()" ">
    <option value="Coke">Coke</option>
    <option value="TestBox">TestBox</option>

    </select>
</form>


<x3d id='someUniqueId' showStat='false' showLog='false' x='0px' y='0px' width='400px' height='400px'>
    <scene DEF='scene'>
        <transform DEF='Model' id="MainModel">
            <shape>
                <appearance id="X3D_appearance" DEF='MAT_Cube'>
                    <material id="X3D_material" diffuseColor='0.5 0.5 0.5' shininess='0.025' specularColor='0.025 0.025 0.025'></material>
                    <imageTexture id="X3D_imageTexture" url='"CubeSurface_Color.png"'></imageTexture>
                </appearance>
                <indexedFaceSet id="X3D_indexedFaceSet" DEF='FACESET_Cube_1' ccw='false' creaseAngle='0.698132' solid='false' texCoordIndex='0 1 4 2 -1 3 5 9 7 -1 7 9 15 12 -1 11 14 1 0 -1 1 13 8 4 -1 10 0 2 6 -1' coordIndex='0 1 3 2 -1 2 3 5 4 -1 4 5 7 6 -1 6 7 1 0 -1 1 7 5 3 -1 6 0 2 4 -1'>
                    <coordinate id="X3D_coordinate" point='-100 -100 -100 -100 100 -100 -100 -100 100 -100 100 100 100 -100 100 100 100 100 100 -100 -100 100 100 -100'></coordinate>
                    <textureCoordinate id="X3D_textureCoordinate" point='0.554222 0.682098 0.280446 0.682098 0.554222 0.993329 0.629133 0.330839 0.280446 0.993329 0.629133 0.019608 0.827997 0.993329 0.317902 0.330839 0.006671 0.993329 0.317902 0.019608 0.827997 0.682098 0.554222 0.370867 0.006671 0.330839 0.006671 0.682098 0.280446 0.370867 0.006671 0.019608'></textureCoordinate>
                </indexedFaceSet>
            </shape>
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