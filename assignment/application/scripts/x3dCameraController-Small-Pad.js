// @ts-ignore
// import Quaternion from './quaternion/quaternion';
// import _ = require('quaternion');
var CameraTransform = /** @class */ (function () {
    function CameraTransform(position, rotation) {
        this.position = position;
        this.rotation = rotation;
    }
    return CameraTransform;
}());
var FrontTransform = new CameraTransform([0, 500, 1500], [0, 1, 0, 0]);
var TopTransform = new CameraTransform([0, 1500, 500], [-1, 0, 0, 1]);
var previousViewpoint = "";
//
// function X3dCamera_Test() {
//     // var Quaternion = require('./quaternion/quaternion');
//
//     // import Quaternion from '';
//
//     // @ts-ignore
//     console.log("x3dCamera Controller test");
//     console.log("x3dCamera Controller test: " + Quaternion.fromEular(0, 0, 0));
// }
function InitialiseViewpoints() {
    console.log("Adding in Viewpoints");
    var container = document.getElementById("x3d_Camera");
    if (container != null) {
        container.innerHTML += CameraTransformToViewpoint("x3d_Camera_VP_Front", FrontTransform);
        container.innerHTML += CameraTransformToViewpoint("x3d_Camera_VP_Top", TopTransform);
    }
}
function CameraTransformToViewpoint(idName, cameraTransform) {
    return "<viewpoint id='" + idName + "' DEF='View_Camera' description='Camera' orientation='" + cameraTransform.rotation + "' position='" + cameraTransform.position + "' fieldOfView='0.927295' nearclippingplane=\"-1\" farclippingplane=\"-1\"\n" +
        "                               centerofrotation=\"0,0,0\" znear=\"-1\" zfar=\"-1\"></viewpoint>\n";
}
function MoveCamera_Preset(preset) {
    if (preset == "Front") {
    }
}
function MoveCamera(transform) {
}
function SetViewPoint(preset) {
    ResetViewPoint();
    // @ts-ignore
    document.getElementById('x3d_Camera_VP_' + preset).setAttribute('set_bind', 'true');
    previousViewpoint = preset;
}
function ResetViewPoint() {
    var previous = document.getElementById('x3d_Camera_VP_' + previousViewpoint);
    if (previous != null) {
        previous.setAttribute('set_bind', 'false');
    }
}
//# sourceMappingURL=x3dCameraController.js.map