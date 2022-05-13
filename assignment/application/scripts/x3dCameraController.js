/**
 * script for controlling the x3d controls for the camera
 */
var CameraTransform = /** @class */ (function () {
    function CameraTransform(position, rotation) {
        this.position = position;
        this.rotation = rotation;
    }
    return CameraTransform;
}());
var yHeight = 500;
var offsetDist = 2000;
var FrontTransform = new CameraTransform([-offsetDist, yHeight, 0], [0, -1.5708, 0, 1.5708]);
var BackTransform = new CameraTransform([offsetDist, yHeight,], [0, 1.5708, 0, 1.5708]);
var LeftTransform = new CameraTransform([0, yHeight, offsetDist], [0, 0, 0, 1.5708]);
var RightTransform = new CameraTransform([0, yHeight, -offsetDist], [0, 1.5708, 0, 3.14159]);
var TopTransform = new CameraTransform([0, 2000, 0], [-1.5708, 0, 0, 1.5708]);
var BottomTransform = new CameraTransform([0, -1000, 0], [1.5708, 0, 0, 1.5708]);
var previousViewpoint = "Default";
var previousPreviousViewpoint = "";
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
        container.innerHTML += CameraTransformToViewpoint("x3d_Camera_VP_Top", TopTransform);
        container.innerHTML += CameraTransformToViewpoint("x3d_Camera_VP_Bottom", BottomTransform);
        container.innerHTML += CameraTransformToViewpoint("x3d_Camera_VP_Front", FrontTransform);
        container.innerHTML += CameraTransformToViewpoint("x3d_Camera_VP_Back", BackTransform);
        container.innerHTML += CameraTransformToViewpoint("x3d_Camera_VP_Left", LeftTransform);
        container.innerHTML += CameraTransformToViewpoint("x3d_Camera_VP_Right", RightTransform);
    }
}
function CameraTransformToViewpoint(idName, cameraTransform) {
    return "<viewpoint id='" + idName + "' DEF='View_Camera' description='Camera' orientation='" + cameraTransform.rotation + "' position='" + cameraTransform.position + "' fieldOfView='0.8' nearclippingplane=\"-1\" farclippingplane=\"-1\"\n" +
        "                               centerofrotation=\"0 0 0\" znear=\"-1\" zfar=\"-1\"></viewpoint>\n";
}
function SetViewPoint(preset) {
    // @ts-ignore
    document.getElementById('x3d_Camera_VP_' + preset).setAttribute('set_bind', 'true');
    previousViewpoint = preset;
}
function ResetViewPoint() {
    previousPreviousViewpoint = previousViewpoint;
    var previous = document.getElementById('x3d_Camera_VP_' + previousPreviousViewpoint);
    if (previous != null) {
        previous.setAttribute('set_bind', 'false');
    }
}
//# sourceMappingURL=x3dCameraController.js.map