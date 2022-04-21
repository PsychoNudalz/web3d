<div class="container-fluid padding ">

    <div class="row">

        <div class="col-md-12 col-lg-9 x3dScreen">
            <x3d id='x3dScreen_x3d' showStat='true' showLog='true' showProgress='true ' runtimeEnabled="true">
                <scene id="scene" DEF='scene'>


                    <!--                <scene render="true" bboxcenter="0,0,0" bboxsize="-1,-1,-1" pickmode="idBuf" dopickpass="true" id="scene" DEF='scene'>-->
                    <transform DEF='Model' id="MainModel">
                        <!--                    //Only modifying on the inline causes it to loads in multiple models for some reason-->
                        <Switch id="X3D_ModelSwitch" bboxCenter='0,0,0' bboxSize='-1,-1,-1' children='X3DChildNode'
                                metadata='X3DMetadataObject'
                                render='true' visible='true' whichChoice='0'>

                            <Inline id="X3D_inline_model_Can" nameSpaceName="InlineModel_Can" mapDEFToID="true" url=""
                                    visible="true"></Inline>
                            <Inline id="X3D_inline_model_Bottle" nameSpaceName="InlineModel_Bottle" mapDEFToID="true"
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
        <script src="application/scripts/PageLoader.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                LoadPhp_x3dController();
            });
        </script>
        <div id="x3dController" class=" col-md-12  col-lg-3">

        </div>
    </div>


    <script src="application/scripts/x3dSceneController.js"></script>
    <script src="application/scripts/x3dCameraController.js"></script>


</div>
<div class="row card_model">
    <div id="card_model" class="card">
        <div class="card-body">
            <div id="title_centre" class="card-title drinksText"><h2 id="card_model_title"></h2>
                <h2></h2></div>
            <div id="subTitle_centre" class="card-subtitle drinksText"><h3 id="card_model_subtitle"></h3></div>
            <div id="description_centre" class="card-text drinksText"><p id="card_model_content"></p></div>
            <a id="card_model_url"target="_blank"
               class="btn btn-primary btn-responsive" href="">Find out more ...</a>
        </div>

    </div>
</div>


<script type='text/javascript' src='node_modules/x3dom/x3dom.js'></script>
