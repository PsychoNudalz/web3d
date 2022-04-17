var x3dPointLight = document.getElementById("x3d_MainPointLight_POINTLIGHT");
var x3dPointLight_Transform = document.getElementById("x3d_MainPointLight_TRANSFORM");
function Initialisex3dPointLight() {
    var x3dPointLight = document.getElementById("x3d_MainPointLight_POINTLIGHT");
    var x3dPointLight_Transform = document.getElementById("x3d_MainPointLight_TRANSFORM");
}
function x3dPointLight_ChangeColour(r, g, b) {
    if (x3dPointLight != null) {
        x3dPointLight.setAttribute("color", r + "," + g + "," + b);
    }
}
function x3dPointLight_ChangeIntensity(intensity) {
    if (x3dPointLight != null) {
        x3dPointLight.setAttribute("intensity", String(intensity));
    }
}
function x3dPointLight_MoveLight(x, y, z) {
    // @ts-ignore
    var currentPos = SplitPosition(x3dPointLight_Transform.getAttribute("translation"));
    currentPos[0] += x;
    currentPos[1] += y;
    currentPos[2] += z;
    // @ts-ignore
    x3dPointLight_Transform.setAttribute("translation", currentPos[0] + " " + currentPos[1] + " " + currentPos[2]);
}
function x3dPointLight_SetLightPos(x, y, z) {
    // @ts-ignore
    x3dPointLight_Transform.setAttribute("translation", x + " " + y + " " + z);
}
function x3dPointLight_MoveLight_x_pos() {
    // @ts-ignore
    var x = Number($("#x3d_LightAddPos").val());
    x3dPointLight_MoveLight(x, 0, 0);
}
function x3dPointLight_MoveLight_x_neg() {
    // @ts-ignore
    var x = -Number($("#x3d_LightAddPos").val());
    x3dPointLight_MoveLight(x, 0, 0);
}
function x3dPointLight_MoveLight_y_pos() {
    // @ts-ignore
    var x = Number($("#x3d_LightAddPos").val());
    x3dPointLight_MoveLight(0, x, 0);
}
function x3dPointLight_MoveLight_y_neg() {
    // @ts-ignore
    var x = -Number($("#x3d_LightAddPos").val());
    x3dPointLight_MoveLight(0, x, 0);
}
function x3dPointLight_MoveLight_z_pos() {
    // @ts-ignore
    var x = Number($("#x3d_LightAddPos").val());
    x3dPointLight_MoveLight(0, 0, x);
}
function x3dPointLight_MoveLight_z_neg() {
    // @ts-ignore
    var x = -Number($("#x3d_LightAddPos").val());
    x3dPointLight_MoveLight(0, 0, x);
}
function SplitPosition(pos) {
    var temp = pos.split(' ');
    try {
        var vector3 = [Number(temp[0]), Number(temp[1]), Number(temp[2])];
        return vector3;
    }
    catch (e) {
        console.error("Failed to split pos: " + pos);
    }
}
//# sourceMappingURL=x3dLightController.js.map