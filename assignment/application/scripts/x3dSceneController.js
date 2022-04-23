var x3dScene = document.getElementById("x3dScreen_x3d");
var transparency = true;
var transparencyValue = 0.2;
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
function ToggleTransparency() {
    var bottle = document.getElementById("InlineModel_Bottle__MAT_Bottle");
    var glass = document.getElementById("InlineModel_Glass__MAT_Glass");
    if (bottle != null) {
        if (transparency) {
            bottle.setAttribute("transparency", "0");
        }
        else {
            bottle.setAttribute("transparency", String(transparencyValue));
        }
    }
    if (glass != null) {
        if (transparency) {
            glass.setAttribute("transparency", "0");
        }
        else {
            glass.setAttribute("transparency", String(transparencyValue));
        }
    }
    transparency = !transparency;
}
//# sourceMappingURL=x3dSceneController.js.map