// class X3DModel {
//     material;
//     texCoordIndex;
//
//     constructor(material: X3DMaterial, texCoordIndex: string | null, public coordIndex: string | null, public coordinate: string | null, public textureCoordinate: string | null) {
//         this.material = material;
//         this.texCoordIndex = texCoordIndex;
//         console.log(this);
//     }
// }
var X3DModel = /** @class */ (function () {
    function X3DModel(texCoordIndex, coordIndex, coordinate, textureCoordinate) {
        this.coordIndex = coordIndex;
        this.coordinate = coordinate;
        this.textureCoordinate = textureCoordinate;
        this.texCoordIndex = texCoordIndex;
        // console.log(this);
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
//
// function LoadModel_OLD() {
//     var projectContainer: HTMLElement | null = document.getElementById("MainModel");
//     var returnXML: Document = ReadX3D("assets/Model/TestBox/TestBox.x3d")
//     console.log(returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("DEF"));
//     if (projectContainer != null) {
//         var material: X3DMaterial = new X3DMaterial(returnXML.getElementsByTagName("Appearance")[0].getAttribute("DEF"), returnXML.getElementsByTagName("Material")[0].getAttribute("diffuseColor"), returnXML.getElementsByTagName("Material")[0].getAttribute("shininess"), returnXML.getElementsByTagName("Material")[0].getAttribute("specularColor"), returnXML.getElementsByTagName("ImageTexture")[0].getAttribute("url"));
//         projectContainer.innerHTML = modelHTML(new X3DModel(material, returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("texCoordIndex"), returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("coordIndex"), returnXML.getElementsByTagName("Coordinate")[0].getAttribute("point"), returnXML.getElementsByTagName("TextureCoordinate")[0].getAttribute("point")));
//     }
//
// }
//
// function modelHTML(x3DModel: X3DModel) {
//     const returnString =
//         "<shape>\n" +
//         "                <appearance DEF='" + x3DModel.material.name + "'>\n" +
//         "                    <material diffuseColor='" + x3DModel.material.diffuseColor + "' shininess='" + x3DModel.material.shininess + "' specularColor='" + x3DModel.material.specularColor + "'></material>\n" +
//         "                    <imageTexture url='" + x3DModel.material.textureURL + "'></imageTexture>\n" +
//         "                </appearance>\n" +
//         "                <indexedFaceSet DEF='FACESET_" + x3DModel.material.name + "' ccw='false' creaseAngle='1.0472' solid='false' texCoordIndex='" + x3DModel.texCoordIndex + "'coordIndex='" + x3DModel.coordIndex + "'>\n" +
//         "                       <coordinate point='" + x3DModel.coordinate + "'></coordinate>\n" +
//         "                       <textureCoordinate point='" + x3DModel.textureCoordinate + "'></textureCoordinate>\n" +
//         "               </indexedFaceSet>\n" +
//         "</shape>";
//     return returnString;
// }
function modelHTML(x3DModel) {
}
function UpdateTexture(x3DMaterial) {
    // @ts-ignore
    document.getElementById("X3D_appearance").DEF = x3DMaterial.name;
    // @ts-ignore
    document.getElementById("X3D_material").diffuseColor = x3DMaterial.diffuseColor;
    // @ts-ignore
    document.getElementById("X3D_material").shininess = x3DMaterial.shininess;
    // @ts-ignore
    document.getElementById("X3D_material").specularColor = x3DMaterial.specularColor;
    // @ts-ignore
    document.getElementById("X3D_imageTexture").url = x3DMaterial.textureURL;
}
function UpdateMesh(x3dMesh) {
    // @ts-ignore
    document.getElementById("X3D_indexedFaceSet").texCoordIndex = x3dMesh.texCoordIndex;
    // @ts-ignore
    document.getElementById("X3D_indexedFaceSet").coordIndex = x3dMesh.coordIndex;
    // @ts-ignore
    document.getElementById("X3D_coordinate").point = x3dMesh.coordinate;
    // @ts-ignore
    document.getElementById("X3D_textureCoordinate").point = x3dMesh.textureCoordinate;
}
function LoadMesh() {
    $(document).ready(function () {
        $("#selectMesh").change(function () {
            var selection = $(this).val();
            console.log('Selected Mesh model:', selection);
            //GETTING MESH
            var brandUrlMesh = "application/model/getMesh.php?meshName=" + selection + "&brandName=" + $("#selectTexture option:selected").val();
            console.log('URL to PHP Model is:', brandUrlMesh);
            $.getJSON(brandUrlMesh)
                .done(function (json) {
                // Debug
                console.log('Get Mesh: ', json);
                //TODO:Fix this sht
                UpdateMesh(new X3DModel(json.texCoordIndex[0], json.coordIndex[0], json.coordinate[0], json.textureCoordinate[0]));
            })
                .fail(function (d, textStatus, error) {
                console.log('viewDrinks JS Handler: Server returned an Error, trap this in your PHP Server code');
                console.warn("getJSON failed, status: " + textStatus + ", error: " + error);
            });
        });
    });
}
function LoadTexture() {
    $(document).ready(function () {
        $("#selectTexture").change(function () {
            var selection = $(this).val();
            console.log('Selected Brand:', selection);
            //GETTING TEXTURE
            var brandUrlTexture = "application/model/getTexture.php?meshName=" + $("#selectMesh option:selected").val() + "&brandName=" + selection;
            console.log('URL to PHP Model is:', brandUrlTexture);
            $.getJSON(brandUrlTexture)
                .done(function (json) {
                // Debug
                console.log('Get Texture: ', json);
                var material = new X3DMaterial(json.name, json.diffuseColor, json.shininess, json.specularColor, json.textureURL);
                // @ts-ignore
                UpdateTexture(material);
            })
                .fail(function (d, textStatus, error) {
                console.log('viewDrinks JS Handler: Server returned an Error, trap this in your PHP Server code');
                console.warn("getJSON failed, status: " + textStatus + ", error: " + error);
            });
        });
    });
}
//# sourceMappingURL=ModelLoader.js.map