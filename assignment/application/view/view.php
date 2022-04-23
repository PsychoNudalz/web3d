<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coca Cola Thingy</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">


    <link rel='stylesheet' type='text/css' href='node_modules/bootstrap/dist/css/bootstrap.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="sass/custom.css">

    <link rel='stylesheet' type='text/css' href='node_modules/x3dom/x3dom.css'>
    <script type='text/javascript' src='node_modules/x3dom/x3dom.js'></script>
    <!--    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/x3dom/release/x3dom.css'></link>-->


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>


    <script src="application/scripts/NavbarLoader.js"></script>
    <script src="application/scripts/ModelLoader.js"></script>

    <script src="application/scripts/ContentSwapper.js"></script>
    <script src="application/scripts/PageLoader.js"></script>
    <script src="application/scripts/AssetLoader.js"></script>


    <script src="application/scripts/ModelLoader.js"></script>
    <!--        <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->


</head>
<body class="bg-light">


<!--<div id="navbarPHP">-->
<!--    -->
<!---->
<!--</div>-->
<nav class="navbar navbar-expand-md navbar-orange bg-dark sticky-top " id="navbarPHP">
</nav>


<!--Content swapping zone-->
<div class="container-fluid ">
    <div id="HOMEPAGE">

    </div>
    <div id="MODEL">

    </div>
</div>


<!--Footer-->
<footer class="footer bg-dark">
    <hr>
    <div class="container-fluid padding text-light">
        <div class=" float-left copyright">
            <p><span class="align-baseline">&copy Web 3D Apps | <a href="#">Restyle</a> | <a
                            href="#" >Reset</a></span></p>
        </div>
        <div class=" float-right social">
            <a href="#"><i class="fa fa-brands fa-facebook-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
<!--            <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>-->
            <a href="#"><i class="fa fa-github fa-2x text-light"></i></a>
        </div>
    </div>
</footer>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        LoadPhp_Navbar();
        LoadPhp_Homepage();
        LoadPhp_Model();
    });
</script>
<!--<script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->

</html>