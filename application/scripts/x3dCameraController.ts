// @ts-ignore
// import Quaternion from './quaternion/quaternion';

// import _ = require('quaternion');

class CameraTransform {
    public position: number[];
    public rotation: number[];

    constructor(position: number[], rotation: number[]) {
        this.position = position;
        this.rotation = rotation;
    }
}

const FrontTransform: CameraTransform = new CameraTransform([0, 500, 1500], [0, 1, 0, 0]);
const TopTransform: CameraTransform = new CameraTransform([0, 1500  , 500], [ -1, 0, 0, 1]);
var previousViewpoint:string="";
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

function CameraTransformToViewpoint(idName: string, cameraTransform: CameraTransform) {
    return "<viewpoint id='" + idName + "' DEF='View_Camera' description='Camera' orientation='" + cameraTransform.rotation + "' position='" + cameraTransform.position + "' fieldOfView='0.927295' nearclippingplane=\"-1\" farclippingplane=\"-1\"\n" +
        "                               centerofrotation=\"0,0,0\" znear=\"-1\" zfar=\"-1\"></viewpoint>\n";
}

function MoveCamera_Preset(preset: string) {
    if (preset == "Front") {

    }
}

function MoveCamera(transform: CameraTransform) {

}

function SetViewPoint(preset: string) {

    var previous = document.getElementById('x3d_Camera_VP_'+previousViewpoint);
    if(previous!=null){
        previous.setAttribute('set_bind','false');
    }
    previousViewpoint = preset;
        // @ts-ignore
    document.getElementById('x3d_Camera_VP_'+preset).setAttribute('set_bind','true');
}

function ResetViewPoint(){
    var previous = document.getElementById('x3d_Camera_VP_'+previousViewpoint);
    if(previous!=null){
        previous.setAttribute('set_bind','false');
    }
}

