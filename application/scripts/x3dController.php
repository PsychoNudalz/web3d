<link rel="stylesheet" href="sass/x3dControl.css">
<script src="application/scripts/quaternion/quaternion.js"></script>
<script src="application/scripts/x3dCameraController.js"></script>

<div id="btn-script-zone">
    <div>
        <h3 class="card-subtitle">Camera Views</h3>
        <div class="camera-btns">
            <p class="card-text">These buttons select a range of X3D
                model viewpoints</p>
            <div class="btn-group ">
                <a href="#" class="btn btn-orange btn-responsive camera-btn" onclick="SetViewPoint('Front')">Front</a>
                <a href="#" class="btn btn-orange btn-responsive camera-btn" onclick="SetViewPoint('Back')">Back</a>
                <a href="#" class="btn btn-orange btn-responsive camera-btn" onclick="SetViewPoint('Left')">Left</a>
                <a href="#" class="btn btn-orange btn-responsive camera-btn" onclick="SetViewPoint('Right')">Right</a>
                <a href="#" class="btn btn-orange btn-responsive camera-btn" onclick="SetViewPoint('Top')">Top</a>
                <a href="#" class="btn btn-orange btn-responsive camera-font" onclick="SetViewPoint('Default')">Off</a>
            </div>
        </div>

    </div>
</div>
