<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coca Cola Thingy</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel='stylesheet' type='text/css' href='node_modules/x3dom/x3dom.css'></link>

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
        $(document).ready(function () {
            // console.log("Idont gking now")
            InitialiseViewpoints();
            // LoadNavbar();
            LoadAllMesh();
            SetAllMeshVisible(false);
            SetActiveMeshVisible($("#selectMesh option:selected").val(), true);


            // console.log("Test: "+Quaternion.fromEuler(0,0,0));
        });</script>
<!--    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->
    <script type='text/javascript' src='node_modules/x3dom/x3dom.js'></script>


    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>

    <script src="application/scripts/ModelLoader.js"></script>
    <!--    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->


</head>
<body class="bg-primary">

<?php
include("application/scripts/navbar.php");
?>
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


<?php
include("application/view/viewX3D_Body.php");
?>

</body>

<!--<script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->

</html>