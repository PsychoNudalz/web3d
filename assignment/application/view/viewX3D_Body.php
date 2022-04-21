<div class="container-fluid padding ">

    <div class="row">

        <div class="col-sm-12 col-md-9 x3dScreen">
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
        <div id="x3dController" class=" col-sm-12  col-md-3">

        </div>
    </div>


    <script src="application/scripts/x3dSceneController.js"></script>
    <script src="application/scripts/x3dCameraController.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // console.log("Idont gking now")
            InitialiseViewpoints();
            LoadAllMesh();
            SetAllMeshVisible(false);
            // SetActiveMeshVisible("Can", true);
            


            $("#selectMesh").click(function () {
                var selection = $(this).val();
                if (selection != null) {

                    // LoadMesh(selection);
                    SetAllMeshVisible(false);
                    // SetActiveMeshVisible(selection, true);
                    SwitchActiveMesh(selection);
                    LoadTexture($("#selectTexture option:selected").val());
                }

            });
            $("#selectTexture").change(function () {
                var selection = $(this).val();
                // LoadMesh_HTML();
                if (selection != null) {

                    LoadTexture(selection);
                }
            });
            // console.log("Test: "+Quaternion.fromEuler(0,0,0));
        });</script>

    <script type='text/javascript' src='node_modules/x3dom/x3dom.js'></script>
    <script type="text/javascript">
        $(document).ready( function(){
            $(#x3dScreen_x3d).ready();
        });
    </script>

</div>