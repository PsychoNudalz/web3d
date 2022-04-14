class X3DModel {
    material;
    texCoordIndex;

    constructor(material: X3DMaterial, texCoordIndex: string | null, public coordIndex: string | null, public coordinate: string | null, public textureCoordinate: string | null) {
        this.material = material;
        this.texCoordIndex = texCoordIndex;
        console.log(this);
    }
}

class X3DMaterial {
    shininess;
    specularColor;
    name;
    textureURL;
    diffuseColor;

    constructor(name: string | null, diffuseColor: string | null, shininess: string | null, specularColor: string | null, textureURL: string | null) {
        this.textureURL = textureURL;
        this.specularColor = specularColor;
        this.diffuseColor = diffuseColor;
        this.shininess = shininess;
        this.name = name;
    }
}


function ReadX3D(url: string) {
    var xhttp;
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    } else {
        xhttp = new ActiveXObject("Microsoft.XMLDOM");
    }

    xhttp.open("GET", url, false);
    xhttp.send();
    return xhttp.responseXML;
}

function LoadModel() {
    var projectContainer: HTMLElement | null = document.getElementById("MainModel");
    var returnXML: Document = ReadX3D("assets/Model/TestBox/TestBox.x3d")
    console.log(returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("DEF"));
    if (projectContainer != null) {
        var material: X3DMaterial = new X3DMaterial(returnXML.getElementsByTagName("Appearance")[0].getAttribute("DEF"), returnXML.getElementsByTagName("Material")[0].getAttribute("diffuseColor"), returnXML.getElementsByTagName("Material")[0].getAttribute("shininess"), returnXML.getElementsByTagName("Material")[0].getAttribute("specularColor"), returnXML.getElementsByTagName("ImageTexture")[0].getAttribute("url"));
        projectContainer.innerHTML = modelHTML(new X3DModel(material, returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("texCoordIndex"), returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("coordIndex"), returnXML.getElementsByTagName("Coordinate")[0].getAttribute("point"), returnXML.getElementsByTagName("TextureCoordinate")[0].getAttribute("point")));
    }

}

function modelHTML(x3DModel: X3DModel) {
    const returnString =
        "<shape>\n" +
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
