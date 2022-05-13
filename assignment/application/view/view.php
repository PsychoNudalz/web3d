<!--MAIN VIEW PAGE-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coca Cola VM</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">


    <link rel='stylesheet' type='text/css' href='node_modules/bootstrap/dist/css/bootstrap.css'>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="node_modules/fancybox/dist/css/jquery.fancybox.css">

    <link rel="stylesheet" href="sass/custom.css">


    <link rel='stylesheet' type='text/css' href='node_modules/x3dom/x3dom.css'>
    <script type='text/javascript' src='node_modules/x3dom/x3dom.js'></script>
    <!--    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/x3dom/release/x3dom.css'></link>-->


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script type="text/javascript" src="node_modules/fancybox/dist/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="node_modules/fancybox/dist/js/jquery.fancybox.pack.js"></script>

    <script src="application/scripts/ModelLoader.js"></script>

    <script src="application/scripts/ContentSwapper.js"></script>
    <script src="application/scripts/PageLoader.js"></script>
    <script src="application/scripts/AssetLoader.js"></script>

    <script src="application/scripts/ModelLoader.js"></script>

</head>
<body class="bg-light">

<nav class="navbar navbar-expand-md navbar-orange bg-dark sticky-top " id="navbarPHP">
</nav>


<!--Content swapping zone-->
<div class="p-0">
    <div id="HOMEPAGE">

    </div>
    <div id="ABOUT">

    </div>
    <div id="MODEL">

    </div>
    <div id="DEEPER">

    </div>
</div>


<!--Footer-->
<footer class="footer bg-dark">
    <div class="text-light row bg-dark">
        <div class="col-3 float-left copyright text-center mx-auto">
            <p class=" mx-auto"><span class="align-baseline">&copy Web 3D Apps </a></span></p>
        </div>
        <div class="col-6 float-md text-light model-list mx-auto text-center">
            <div class="pb-0 mb-0">
                <p class="text-light pl-0 pb-0 mb-0" style="display: inline-block">Models x3d: </p>
                <ul id="model_github" class="pl-0 mb-0" style="display: inline-block">
                    <li><a id="github-Can_url" target="_blank"><p id="github-Can_title" class="pb-0 mb-0"></p></a></li>
                    <li><a id="github-Bottle_url" target="_blank"><p id="github-Bottle_title" class="pb-0 mb-0"></p></a></li>
                    <li><a id="github-Glass_url" target="_blank"><p id="github-Glass_title" class="pb-0 mb-0"></p></a></li>
                </ul>
            </div>
            <div class="pb-0 mb-0">
                <p class="text-light pl-0 pb-0 mb-0" style="display: inline-block">Models fbx: </p>
                <ul id="model_github" class="pl-0 mb-0" style="display: inline-block">
                    <li><a id="github-Can-fbx_url" target="_blank"><p id="github-Can-fbx_title" class="pb-0 mb-0"></p></a></li>
                    <li><a id="github-Bottle-fbx_url" target="_blank"><p id="github-Bottle-fbx_title" class="pb-0 mb-0"></p></a></li>
                    <li><a id="github-Glass-fbx_url" target="_blank"><p id="github-Glass-fbx_title" class="pb-0 mb-0"></p></a></li>
                </ul>
            </div>

        </div>
        <div class="col-3 float-right social text-center mx-auto">
            <a id="facebook-icon_url" href="#" class=" mx-auto" target="_blank"><i class="facebook-icon_url fa fa-brands fa-facebook-square fa-2x"></i></a>
            <a id="twitter-icon_url" href="#" class=" mx-auto" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
            <a id="insta-icon_url" href="#" class=" mx-auto" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
            <a id="youtube-icon_url" href="#" class=" mx-auto" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a>
            <a id="github-icon_url" href="#" class=" mx-auto" target="_blank"><i class="fa fa-github fa-2x text-light"></i></a>
        </div>
    </div>
</footer>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        // loads x3d model info
        AssetLoader_TextInfo("github-Can", "github-Can");
        AssetLoader_TextInfo("github-Bottle", "github-Bottle");
        AssetLoader_TextInfo("github-Glass", "github-Glass");

        // loads fbx model info
        AssetLoader_TextInfo("github-Can-fbx", "github-Can-fbx");
        AssetLoader_TextInfo("github-Bottle-fbx", "github-Bottle-fbx");
        AssetLoader_TextInfo("github-Glass-fbx", "github-Glass-fbx");

        //loads icon and their hyperlink
        AssetLoader_TextInfo("facebook-icon", "facebook");
        AssetLoader_TextInfo("twitter-icon", "twitter");
        AssetLoader_TextInfo("github-icon", "github");
        AssetLoader_TextInfo("insta-icon", "insta");
        AssetLoader_TextInfo("youtube-icon", "youtube");
        
        //Loads in the php for each content swap pages
        LoadPhp_Navbar();
        LoadPhp_Homepage();
        LoadPhp_Model();
        LoadPhp_About();
        LoadPhp_Deeper();

    });
</script>

<!--<script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>-->

</html>