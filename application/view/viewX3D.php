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

    <script src="application/scripts/x3dSceneController.js"></script>
    <script src="application/scripts/x3dCameraController.js"></script>
    <script type="text/javascript">
        window.onload = function () {
            console.log("Idont gking now")
            InitialiseViewpoints();
            LoadNavbar();
            LoadAllMesh();
            SetActiveMeshVisible($("#selectMesh option:selected").val(), true);


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
            // LoadMesh(selection);
            SetAllMeshVisible(false);
            SetActiveMeshVisible(selection, true);
            LoadTexture($("#selectTexture option:selected").val());
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $("#selectTexture").change(function () {
            var selection = $(this).val();
            // LoadMesh_HTML();
            LoadTexture(selection);
        });
    });
</script>


<div class="container-fluid padding ">

    <div class="row">

        <div class="col-sm-12 col-md-9 x3dScreen">
            <x3d id='x3dScreen_x3d' showStat='false' showLog='false' showProgress='false' runtimeEnabled="true">
                <scene id="scene" DEF='scene'>
                    <transform DEF='Model' id="MainModel">
                        <!--                    //Only modifying on the inline causes it to loads in multiple models for some reason-->
                        <Inline id="X3D_inline_model_Default" nameSpaceName="InlineModel_Default" mapDEFToID="true"
                                url=""
                                visible="true"></Inline>
                        <Inline id="X3D_inline_model_Can" nameSpaceName="InlineModel_Can" mapDEFToID="true" url=""
                                visible="false"></Inline>
                        <Inline id="X3D_inline_model_Bottle" nameSpaceName="InlineModel_Bottle" mapDEFToID="true" url=""
                                visible="false"></Inline>
                        <Inline id="X3D_inline_model_Glass" nameSpaceName="InlineModel_Glass" mapDEFToID="true" url=""
                                visible="false"></Inline>
                        <Inline id="X3D_inline_model_TestScene" nameSpaceName="InlineModel_TestScene" mapDEFToID="true"
                                url=""
                                visible="false"></Inline>
                        <!--                        <indexedFaceSet id="X3D_indexedFaceSet" DEF='FACESET_Cube_1' ccw='false'-->
                        <!--                                        creaseAngle='0.698132'-->
                        <!--                                        solid='false'-->
                        <!--                                        texCoordIndex='0 1 4 2 -1 3 5 9 7 -1 7 9 15 12 -1 11 14 1 0 -1 1 13 8 4 -1 10 0 2 6 -1'-->
                        <!--                                        coordIndex='0 1 3 2 -1 2 3 5 4 -1 4 5 7 6 -1 6 7 1 0 -1 1 7 5 3 -1 6 0 2 4 -1'>-->
                        <!--                            <coordinate id="X3D_coordinate"-->
                        <!--                                        point='-100 -100 -100 -100 100 -100 -100 -100 100 -100 100 100 100 -100 100 100 100 100 100 -100 -100 100 100 -100'></coordinate>-->
                        <!--                            <textureCoordinate id="X3D_textureCoordinate"-->
                        <!--                                               point='0.554222 0.682098 0.280446 0.682098 0.554222 0.993329 0.629133 0.330839 0.280446 0.993329 0.629133 0.019608 0.827997 0.993329 0.317902 0.330839 0.006671 0.993329 0.317902 0.019608 0.827997 0.682098 0.554222 0.370867 0.006671 0.330839 0.006671 0.682098 0.280446 0.370867 0.006671 0.019608'></textureCoordinate>-->
                        <!--                        </indexedFaceSet>-->


                    </transform>
                    <transform id="x3d_Camera" DEF='Camera' rotation='0 0 0 1'
                               translation='0 0 0'>
                        <viewpoint DEF='View_Camera' id="x3d_Camera_VP_Default" description='Camera'
                                   orientation='0, 1, 0, 0' position='0, 500, 2000'
                                   fieldOfView='0.8'></viewpoint>

                    </transform>

                    <transform id="x3d_MainPointLight_TRANSFORM" DEF='Light' translation='2000 500 2000'>
                        <pointLight id="x3d_MainPointLight_POINTLIGHT" DEF='LIGHT_Light' radius='1e+08' intensity="2"></pointLight>
                    </transform>
                    <timeSensor DEF='Timer' cycleInterval='3' loop='true'></timeSensor>
                </scene>
            </x3d>
        </div>
        <div class="col-sm-12  col-md-3">
            <?php
            include("application/scripts/x3dController.php");
            ?>
        </div>
    </div>

</div>

</body>

<!--<script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->

</html>