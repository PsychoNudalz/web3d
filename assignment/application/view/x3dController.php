<script src="application/scripts/quaternion/quaternion.js"></script>
<script src="application/scripts/x3dCameraController.js"></script>
<script src="application/scripts/x3dSceneController.js"></script>
<script src="application/scripts/x3dLightController.js"></script>

<div class="container-fluid">

    <div id="btn-script-zone x3d-controller " class="row">

        <div class=" col-sm-4 col-md-4 col-lg-12 float-md-left">
            <div class="  x3d-btns model-btns">

                <h3 class="card-subtitle">Model Controls</h3>
                <p class="card-text">Change fields to change model</p>
                <div class="btn-group ">
                    <form>
                        <!--    <select id="selectMesh" onclick="LoadMesh_JQ();">-->
                        <select id="selectMesh">
                            <option value="Can" selected>Can</option>
                            <option value="Bottle">Bottle</option>
                            <option value="Glass">Glass</option>
                            <!--                        <option value="TestScene">TestScene</option>-->

                        </select>
                        <select id="selectTexture">
                            <option value="Coke" selected>Coke</option>
                            <option value="Sprite">Sprite</option>
                            <option value="Fanta">Fanta</option>

                        </select>
                    </form>
                </div>
                <div class="model-view-btns">
                    <div class="btn-group ">
                        <a href="#" class="btn btn-orange btn-responsive camera-btn" onclick="ToggleWireFrame()">Toggle
                            viewing
                            modes</a>
                    </div>
                    <br>
                    <p></p>
                    <div class="btn-group ">
                        <a href="#" class="btn btn-orange btn-responsive camera-btn" onclick="ToggleTransparency()">Toggle
                            transparency</a>
                    </div>
                </div>
                <br>
            </div>

        </div>
        <br>
        <div class=" col-sm-4 col-md-4 col-lg-12  float-md-None">
            <div class="  x3d-btns model-btns">

                <h3 class="card-subtitle">Camera Controls</h3>
                <p class="card-text">These buttons select a range of X3D
                    model viewpoints</p>
                <div class="container-fluid row">
                    <div class="col-lg-12 col-xl-6  btn-group">
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="SetViewPoint('Front')">Front</a>
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="SetViewPoint('Back')">Back</a>
                    </div>
                    <div class="col-lg-12 col-xl-6  btn-group">

                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="SetViewPoint('Left')">Left</a>
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="SetViewPoint('Right')">Right</a>
                    </div>
                    <div class=" col-lg-12 col-xl-6 btn-group">
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="SetViewPoint('Top')">Top</a>

                        <a href="#" class="btn btn-orange btn-responsive camera-font"
                           onclick="SetViewPoint('Default')">Off</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class=" col-sm-4 col-md-4 col-lg-12  float-md-right">
            <div class="  x3d-btns model-btns">

                <h3 class="card-subtitle">Lighting Controls</h3>
                <p class="card-text">Change Light Position </p>
                <div class="col-lg-12">
                    <form>
                        <label>Amount to Move: </label>
                        <input type="number" id="x3d_LightAddPos" placeholder="50" value="50" step="50" min="0">
                        <script>
                            $(document).keypress(
                                function (event) {
                                    if (event.which == '13') {
                                        event.preventDefault();
                                    }
                                });
                        </script>
                    </form>
                </div>
                <div class="lighting-move-btns ">
                    <div class="col-lg-12 col-xl-6 btn-group ">
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="x3dPointLight_MoveLight_y_pos();">Up</a>
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="x3dPointLight_MoveLight_y_neg();">Down</a>
                    </div>
                    <div class="col-lg-12 col-xl-6 btn-group ">
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="x3dPointLight_MoveLight_x_neg();">Left</a>
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="x3dPointLight_MoveLight_x_pos();">Right</a>
                    </div>
                    <div class="col-lg-12 col-xl-6 btn-group ">
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="x3dPointLight_MoveLight_z_pos();">Forward</a>
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="x3dPointLight_MoveLight_z_neg();">Backward</a>
                    </div>
                    <div class="col-lg-12 col-xl-6 btn-group">
                        <a href="#" class="btn btn-orange btn-responsive camera-btn"
                           onclick="x3dPointLight_SetLightPos(2000,500,2000);">RESET</a>
                    </div>
                </div>
                <br>
                <div class="lighting-colour-btns">
                    <p class="card-text">Change Colour </p>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeColour(1,0,0)">Red</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeColour(1,.5,0)">Orange</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeColour(1,1,0)">Yellow</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeColour(0,1,0)">Green</a>

                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeColour(0,1,.5)">Cyan</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeColour(0,0,1)">Blue</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeColour(1,0,1)">Purple</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeColour(1,1,1)">White</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeColour(0,0,0)">Off</a>
                </div>
                <br>
                <div class=" lighting-intensity-btns">
                    <p class="card-text">Change Intensity </p>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeIntensity(2)">Default</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeIntensity(0)">Off</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeIntensity(1)">Low</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeIntensity(5)">Mid</a>
                    <a href="#" class="btn btn-orange btn-responsive camera-btn"
                       onclick="x3dPointLight_ChangeIntensity(10)">High</a>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                // console.log("Idont gking now")
                InitialiseViewpoints();
                LoadAllMesh();
                SetAllMeshVisible(false);
                AssetLoader_TextInfo("card_model", "Coke_About");

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
                        AssetLoader_TextInfo("card_model", $("#selectTexture option:selected").val() + "_About");

                    }
                });
                // console.log("Test: "+Quaternion.fromEuler(0,0,0));
            });</script>

    </div>
</div>

<script type='text/javascript' src='node_modules/x3dom/x3dom.js'></script>
