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

const yHeight:number = 500;
const offsetDist:number = 2000;

const FrontTransform: CameraTransform = new CameraTransform([-offsetDist, yHeight, 0], [0, -1.5708, 0, 1.5708]);
const BackTransform: CameraTransform = new CameraTransform([offsetDist, yHeight, ], [ 0, 1.5708, 0,  1.5708]);
const LeftTransform: CameraTransform = new CameraTransform([0, yHeight  , offsetDist],[0, 0, 0, 1.5708]);
const RightTransform: CameraTransform = new CameraTransform([0, yHeight  , -offsetDist], [ 0, 1.5708, 0,3.14159]);
const TopTransform: CameraTransform = new CameraTransform([0, 2000  , 0], [ -1.5708, 0, 0, 1.5708]);
const BottomTransform: CameraTransform = new CameraTransform([0, -1000  , 0], [ 1.5708, 0, 0, 1.5708]);
var previousViewpoint:string="Default";
var previousPreviousViewpoint:string="";
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

function CameraTransformToViewpoint(idName: string, cameraTransform: CameraTransform) {
    return "<viewpoint id='" + idName + "' DEF='View_Camera' description='Camera' orientation='" + cameraTransform.rotation + "' position='" + cameraTransform.position + "' fieldOfView='0.8' nearclippingplane=\"-1\" farclippingplane=\"-1\"\n" +
        "                               centerofrotation=\"0 0 0\" znear=\"-1\" zfar=\"-1\"></viewpoint>\n";
}

function MoveCamera_Preset(preset: string) {
    if (preset == "Front") {

    }
}

function MoveCamera(transform: CameraTransform) {

}

function SetViewPoint(preset: string) {


    // ResetViewPoint();
    // @ts-ignore
    document.getElementById('x3d_Camera_VP_'+preset).setAttribute('set_bind','true');
    
    previousViewpoint = preset;
}

function ResetViewPoint(){
   previousPreviousViewpoint = previousViewpoint;
    var previous = document.getElementById('x3d_Camera_VP_'+previousPreviousViewpoint);
    if(previous!=null){
        previous.setAttribute('set_bind','false');
    }
}

