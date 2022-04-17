var x3dScene = document.getElementById("x3dScreen_x3d");
function ToggleWireFrame() {
    if (x3dScene == null) {
        x3dScene = document.getElementById("x3dScreen_x3d");
    }
    // @ts-ignore
    if (x3dScene.runtime == null) {
        console.warn("x3dScene.runtime == null");
    }
    else {
        // @ts-ignore
        x3dScene.runtime.togglePoints(true);
        // @ts-ignore
        x3dScene.runtime.togglePoints(true);
    }
}
//# sourceMappingURL=x3dSceneController.js.map