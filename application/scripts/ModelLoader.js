var X3DModel = /** @class */ (function () {
    function X3DModel(material, texCoordIndex, coordIndex, coordinate, textureCoordinate) {
        this.coordIndex = coordIndex;
        this.coordinate = coordinate;
        this.textureCoordinate = textureCoordinate;
        this.material = material;
        this.texCoordIndex = texCoordIndex;
        console.log(this);
    }
    return X3DModel;
}());
var X3DMaterial = /** @class */ (function () {
    function X3DMaterial(name, diffuseColor, shininess, specularColor, textureURL) {
        this.textureURL = textureURL;
        this.specularColor = specularColor;
        this.diffuseColor = diffuseColor;
        this.shininess = shininess;
        this.name = name;
    }
    return X3DMaterial;
}());
function ReadX3D(url) {
    var xhttp;
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    }
    else {
        xhttp = new ActiveXObject("Microsoft.XMLDOM");
    }
    xhttp.open("GET", url, false);
    xhttp.send();
    return xhttp.responseXML;
}
function LoadModel() {
    var projectContainer = document.getElementById("MainModel");
    var returnXML = ReadX3D("assets/Model/TestBox/TestBox.x3d");
    console.log(returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("DEF"));
    if (projectContainer != null) {
        var material = new X3DMaterial(returnXML.getElementsByTagName("Appearance")[0].getAttribute("DEF"), returnXML.getElementsByTagName("Material")[0].getAttribute("diffuseColor"), returnXML.getElementsByTagName("Material")[0].getAttribute("shininess"), returnXML.getElementsByTagName("Material")[0].getAttribute("specularColor"), returnXML.getElementsByTagName("ImageTexture")[0].getAttribute("url"));
        projectContainer.innerHTML = modelHTML(new X3DModel(material, returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("texCoordIndex"), returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("coordIndex"), returnXML.getElementsByTagName("Coordinate")[0].getAttribute("point"), returnXML.getElementsByTagName("TextureCoordinate")[0].getAttribute("point")));
    }
}
function modelHTML(x3DModel) {
    var returnString = "<shape>\n" +
        "                <appearance DEF='" + x3DModel.material.name + "'>\n" +
        "                    <material diffuseColor='" + x3DModel.material.diffuseColor + "' shininess='" + x3DModel.material.shininess + "' specularColor='" + x3DModel.material.specularColor + "'></material>\n" +
        "                    <imageTexture url='" + x3DModel.material.textureURL + "'></imageTexture>\n" +
        "                </appearance>\n" +
        "                <indexedFaceSet DEF='FACESET_" + x3DModel.material.name + "' ccw='false' creaseAngle='1.0472' solid='false' texCoordIndex='" + x3DModel.texCoordIndex + "'coordIndex='" + x3DModel.coordIndex + "'>\n" +
        "                       <coordinate point='" + x3DModel.coordinate + "'></coordinate>\n" +
        "                       <textureCoordinate point='" + x3DModel.textureCoordinate + "'></textureCoordinate>\n" +
        "               </indexedFaceSet>\n" +
        "</shape>";
    return returnString;
}
//# sourceMappingURL=ModelLoader.js.map