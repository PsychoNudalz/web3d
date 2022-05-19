<!--MODEL VIEWING PAGE-->
<div class=" container-fluid row">

    <div class="col-md-12 col-lg-9 p-md-3 p-lg-3 mx-auto">
        <h2 class="text-red text-center">Model Viewer</h2>
        <br>
        <div id="x3dScreen_div" class="x3dScreen mx-md-auto">


            <x3d id='x3dScreen_x3d' showStat='false' showLog='false' showProgress='false ' runtimeEnabled="true">
                <scene id="scene" class="x3dScreen_Scene" DEF='scene'>


                    <!--                <scene render="true" bboxcenter="0,0,0" bboxsize="-1,-1,-1" pickmode="idBuf" dopickpass="true" id="scene" DEF='scene'>-->
                    <transform DEF='Model' id="MainModel">
                        <!--                    //Only modifying on the inline causes it to loads in multiple models for some reason-->
                        <Switch id="X3D_ModelSwitch" bboxCenter='0,0,0' bboxSize='-1,-1,-1' children='X3DChildNode'
                                metadata='X3DMetadataObject'
                                render='true' visible='true' whichChoice='0'>

                            <Inline id="X3D_inline_model_Can" nameSpaceName="InlineModel_Can" mapDEFToID="true"
                                    url=""
                                    visible="true"></Inline>
                            <Inline id="X3D_inline_model_Bottle" nameSpaceName="InlineModel_Bottle"
                                    mapDEFToID="true"
                                    url=""
                                    visible="true"></Inline>
                            <Inline id="X3D_inline_model_Glass" nameSpaceName="InlineModel_Glass" mapDEFToID="true"
                                    url=""
                                    visible="true"></Inline>

                        </Switch>

                    </transform>
                    <transform id="x3d_Camera" DEF='Camera' rotation='0 0 0 1'
                               translation='0 0 0'>
                        <viewpoint DEF='View_Camera' id="x3d_Camera_VP_Default" description='Camera'
                                   orientation='0, 1, 0, 0' position='0, 500, 2000'
                                   fieldOfView='0.8'></viewpoint>

                    </transform>

                    <transform id="x3d_MainPointLight_TRANSFORM" DEF='Light' translation='2000 500 2000'>
                        <pointLight id="x3d_MainPointLight_POINTLIGHT" DEF='LIGHT_Light' radius='1e+08'
                                    intensity="2"></pointLight>
                    </transform>
                    <timeSensor DEF='Timer' cycleInterval='3' loop='true'></timeSensor>


                </scene>
            </x3d>
        </div>
    </div>

    <div id="x3dController" class=" col-md-12  col-lg-3">
        
    </div>
</div>


<script src="application/scripts/x3dSceneController.js"></script>
<script src="application/scripts/x3dCameraController.js"></script>


<div class="mx-auto row card_model container-fluid col-lg-12">
    <div id="card_model" class="model-description card col-lg-12">
        <div class="card-body p-3 rounded">
            <div id="title_centre" class="card-title drinksText">
                <h2 id="card_model_title" class="text-red"></h2>
            </div>
            <div id="subTitle_centre" class="card-subtitle drinksText">
                <h3 id="card_model_subtitle" class="text-red"></h3>
            </div>
            <div id="description_centre" class="card-text drinksText">
                <p id="card_model_content"></p>
            </div>
            <a id="card_model_url" target="_blank"
               class="btn btn-primary btn-responsive" href="">Find out more ...</a>
        </div>

    </div>
</div>


<script src="application/scripts/PageLoader.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        LoadPhp_x3dController();
        AssetLoader_imgToBackground("scene", "x3dBackground");

    });
</script>

