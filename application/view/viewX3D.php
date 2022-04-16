<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coca Cola Thingy</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/x3dom/release/x3dom.css'></link>

    <link rel='stylesheet' type='text/css' href='node_modules/bootstrap/dist/css/bootstrap.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="sass/custom.css">

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="application/scripts/NavbarLoader.js"></script>
    <script src="application/scripts/ModelLoader.js"></script>

    <script src="application/scripts/x3dCameraController.js"></script>
    <script type="text/javascript">
        window.onload = function () {
            console.log("Idont gking now")
            InitialiseViewpoints();
            LoadNavbar();

            LoadMesh_HTML();

            // console.log("Test: "+Quaternion.fromEuler(0,0,0));
        };</script>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>


    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>

    <script src="application/scripts/ModelLoader.js"></script>
    <!--    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->


</head>
<body class="bg-primary">

<nav class="navbar navbar-expand-md navbar-orange bg-dark sticky-top " id="LoadNavbar">
</nav>


<script type="text/javascript">
    $(document).ready(function () {
        $("#selectMesh").click(function () {
            var selection = $(this).val();

            LoadMesh(selection);
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $("#selectTexture").change(function () {

            var selection = $(this).val();
            LoadTexture(selection);

        });
    });
</script>


<div class=" row container-fluid padding ">
    <div class=" col-sm-12">

        <form>
            <!--    <select id="selectMesh" onclick="LoadMesh_JQ();">-->
            <select id="selectMesh">
                <option value="Can" selected>Can</option>
                <option value="Bottle">Bottle</option>
                <option value="Glass">Glass</option>
                <option value="TestBox">TestBox</option>

            </select>
            <select id="selectTexture">
                <option value="Coke" selected>Coke</option>
                <option value="Sprite">Sprite</option>
                <option value="Fanta">Fanta</option>
                <option value="TestBox">TestBox</option>

            </select>
        </form>
    </div>
</div>

<div class=" row container-fluid padding ">
    <div class="col-sm-12 x3dScreen">
        <x3d id='x3dScreen_x3d' showStat='false' showLog='false'>
            <scene DEF='scene'>
                <transform DEF='Model' id="MainModel">
                    <shape>
                        <appearance id="X3D_appearance" DEF='MAT_Cube'>
                            <material id="X3D_material" diffuseColor='0.5 0.5 0.5' shininess='0.025'
                                      specularColor='0.025 0.025 0.025'></material>
                            <imageTexture id="X3D_imageTexture" url='"CubeSurface_Color.png"'></imageTexture>
                        </appearance>
                        <indexedFaceSet id="X3D_indexedFaceSet" DEF='FACESET_Cube_1' ccw='false'
                                        creaseAngle='0.698132'
                                        solid='false'
                                        texCoordIndex='0 1 4 2 -1 3 5 9 7 -1 7 9 15 12 -1 11 14 1 0 -1 1 13 8 4 -1 10 0 2 6 -1'
                                        coordIndex='0 1 3 2 -1 2 3 5 4 -1 4 5 7 6 -1 6 7 1 0 -1 1 7 5 3 -1 6 0 2 4 -1'>
                            <coordinate id="X3D_coordinate"
                                        point='-100 -100 -100 -100 100 -100 -100 -100 100 -100 100 100 100 -100 100 100 100 100 100 -100 -100 100 100 -100'></coordinate>
                            <textureCoordinate id="X3D_textureCoordinate"
                                               point='0.554222 0.682098 0.280446 0.682098 0.554222 0.993329 0.629133 0.330839 0.280446 0.993329 0.629133 0.019608 0.827997 0.993329 0.317902 0.330839 0.006671 0.993329 0.317902 0.019608 0.827997 0.682098 0.554222 0.370867 0.006671 0.330839 0.006671 0.682098 0.280446 0.370867 0.006671 0.019608'></textureCoordinate>
                        </indexedFaceSet>
                    </shape>
                </transform>
                <transform id="x3d_Camera" DEF='Camera' rotation='0 0 0 1'
                           translation='0 0 0'>
                    <viewpoint DEF='View_Camera' description='Camera' orientation='0 -1 0 1.5708' position='0 0 0'
                               fieldOfView='0.927295'></viewpoint>

                </transform>

                <transform DEF='Light' translation='0 127.424 0'>
                    <pointLight DEF='LIGHT_Light' radius='1e+08'></pointLight>
                </transform>
                <timeSensor DEF='Timer' cycleInterval='3' loop='true'></timeSensor>
            </scene>
        </x3d>
    </div>
</div>

</div>
<div class=" row container-fluid padding ">
    <div class="col-sm-12">
        <?php
        include("application/scripts/x3dController.php");
        ?>
    </div>
</div>
</div>


<div>
    <h1>Display stuff</h1>

</div>
</body>

<!--<script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->

</html>