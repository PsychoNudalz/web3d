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
// //
// function LoadModelByX3D(url:string) {
//     // var projectContainer: HTMLElement | null = document.getElementById("MainModel");
//     var returnXML: Document = ReadX3D(url)
//     console.log("Read clear: "+returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("DEF"));
//     var material: X3DMaterial = new X3DMaterial(returnXML.getElementsByTagName("Appearance")[0].getAttribute("DEF"), returnXML.getElementsByTagName("Material")[0].getAttribute("diffuseColor"), returnXML.getElementsByTagName("Material")[0].getAttribute("shininess"), returnXML.getElementsByTagName("Material")[0].getAttribute("specularColor"), returnXML.getElementsByTagName("ImageTexture")[0].getAttribute("url"));
//
//
//     // if (projectContainer != null) {
//         // projectContainer.innerHTML = modelHTML(new X3DModel(material, returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("texCoordIndex"), returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("coordIndex"), returnXML.getElementsByTagName("Coordinate")[0].getAttribute("point"), returnXML.getElementsByTagName("TextureCoordinate")[0].getAttribute("point")));
//     // }
//
// }//
function LoadMeshByX3D(url) {
    // var projectContainer: HTMLElement | null = document.getElementById("MainModel");
    console.log("reading x3d from: " + url);
    var returnXML = ReadX3D(url);
    if (returnXML != null) {
        console.log("Read clear: " + returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("DEF"));
        console.log(returnXML);
        // var material: X3DMaterial = new X3DMaterial(returnXML.getElementsByTagName("Appearance")[0].getAttribute("DEF"), returnXML.getElementsByTagName("Material")[0].getAttribute("diffuseColor"), returnXML.getElementsByTagName("Material")[0].getAttribute("shininess"), returnXML.getElementsByTagName("Material")[0].getAttribute("specularColor"), returnXML.getElementsByTagName("ImageTexture")[0].getAttribute("url"));
        return new X3DModel(returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("texCoordIndex"), returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("coordIndex"), returnXML.getElementsByTagName("Coordinate")[0].getAttribute("point"), returnXML.getElementsByTagName("TextureCoordinate")[0].getAttribute("point"));
    }
    else {
        return null;
    }
    // if (projectContainer != null) {
    // projectContainer.innerHTML = modelHTML(new X3DModel(material, returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("texCoordIndex"), returnXML.getElementsByTagName("IndexedFaceSet")[0].getAttribute("coordIndex"), returnXML.getElementsByTagName("Coordinate")[0].getAttribute("point"), returnXML.getElementsByTagName("TextureCoordinate")[0].getAttribute("point")));
    // }
}
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
function UpdateTextureInline(x3DMaterial, meshName) {
    if (meshName == null) {
        meshName = "Default";
    }
    var idName = "InlineModel_" + meshName;
    if (document.getElementById(idName + "__MAT_Url") == null) {
        console.warn("Failed to get Texture ID: " + idName + "__MAT_Url");
        return;
    }
    try {
        // @ts-ignore
        document.getElementById(idName + "__MAT_Url").setAttribute('url', x3DMaterial.textureURL);
        // @ts-ignore
        console.warn("COMPLETED to load Texture URL: " + document.getElementById(idName + "__MAT_Url").getAttribute('url'));
    }
    catch (error) {
        console.error("Failed to load Texture URL");
    }
    try {
        // @ts-ignore
        document.getElementById(idName + "__MAT_Mat").setAttribute('diffuseColor', x3DMaterial.diffuseColor);
        // @ts-ignore
        document.getElementById(idName + "__MAT_Mat").setAttribute('shininess', x3DMaterial.shininess);
        // @ts-ignore
        document.getElementById(idName + "__MAT_Mat").setAttribute('specularColor', x3DMaterial.specularColor);
    }
    catch (error) {
        console.error("Failed to load Texture Mat");
    }
}
function UpdateMesh(x3dMesh) {
    try {
        // @ts-ignore
        document.getElementById("X3D_indexedFaceSet").texCoordIndex = x3dMesh.texCoordIndex;
    }
    catch (error) {
    }
    try { // @ts-ignore
        document.getElementById("X3D_indexedFaceSet").coordIndex = x3dMesh.coordIndex;
    }
    catch (error) {
    }
    try { // @ts-ignore
        document.getElementById("X3D_coordinate").point = x3dMesh.coordinate;
    }
    catch (error) {
    }
    try { // @ts-ignore
        document.getElementById("X3D_textureCoordinate").point = x3dMesh.textureCoordinate;
    }
    catch (error) {
    }
}
function SetAllMeshVisible(b) {
    // @ts-ignore
    document.getElementById("X3D_inline_model_Default").setAttribute("visible", b);
    // @ts-ignore
    document.getElementById("X3D_inline_model_Can").setAttribute("visible", b);
    // @ts-ignore
    document.getElementById("X3D_inline_model_Bottle").setAttribute("visible", b);
    // @ts-ignore
    document.getElementById("X3D_inline_model_Glass").setAttribute("visible", b);
    // @ts-ignore
    // document.getElementById("X3D_inline_model_TestScene").setAttribute("visible", b);
}
function SetActiveMeshVisible(meshName, b) {
    console.log("updating inline mesh");
    if (meshName == null) {
        meshName = "Default";
    }
    var idName = "X3D_inline_model_" + meshName;
    try {
        var ref = document.getElementById(idName);
        if (ref != null) {
            // @ts-ignore
            ref.setAttribute("visible", b);
        }
    }
    catch (error) {
    }
}
function LoadAllMesh() {
    LoadMesh("Can");
    LoadMesh("Bottle");
    LoadMesh("Glass");
    // LoadMesh("TestScene");
    SetAllMeshVisible(false);
}
function UpdateMeshInline(url, meshName) {
    console.log("updating inline mesh");
    if (meshName == null) {
        meshName = "Default";
    }
    var idName = "X3D_inline_model_" + meshName;
    try {
        var ref = document.getElementById(idName);
        if (ref != null) {
            if (ref.getAttribute("url") == url) {
                return;
            }
            // @ts-ignore
            ref.setAttribute("url", url);
        }
    }
    catch (error) {
    }
}
function LoadMesh(selection) {
    SetAllMeshVisible(false);
    console.log('Selected Mesh model:', selection);
    //GETTING MESH
    var brandName = $("#selectTexture option:selected").val();
    if (brandName == "undefined") {
        brandName = "Coke";
    }
    var urlMesh = "application/model/getMeshX3D.php?meshName=" + selection + "&brandName=" + brandName;
    console.log('URL to PHP Model is:', urlMesh);
    var getJSONFail = true;
    $.getJSON(urlMesh)
        .done(function (json) {
        // Debug
        console.log('Get Mesh: ', json.Path);
        //Loading x3D from path;
        // var x3dMesh: X3DModel | null;
        // x3dMesh = LoadMeshByX3D(json.Path);
        if (json.Path != null) {
            UpdateMeshInline(json.Path, selection);
            console.log("Mesh Loaded");
            try {
                LoadTexture_HTML();
            }
            catch (error) {
            }
        }
        else {
            console.error("Can not load mesh at: " + json.Path);
        }
        getJSONFail = false;
    })
        .fail(function (d, textStatus, error) {
        console.log('ModelLoader getX3D: Server returned an Error, trap this in your PHP Server code');
        console.warn(" getX3D getJSON failed, status: " + textStatus + ", error: " + error);
    });
}
function LoadMesh_JQ() {
    $(document).ready(function () {
        $("#selectMesh").click(function () {
            var selection = $(this).val();
            LoadMesh(selection);
        });
    });
}
function LoadMesh_HTML() {
    // @ts-ignore
    LoadMesh($("#selectMesh option:selected").val());
}
function LoadTexture(selection) {
    console.log('Selected Texture:', selection);
    //GETTING TEXTURE
    var mesh = $("#selectMesh option:selected").val();
    var urlTexture = "application/model/getTexture.php?meshName=" + mesh + "&brandName=" + selection;
    console.log('URL to PHP Model is:', urlTexture);
    $.getJSON(urlTexture)
        .done(function (json) {
        // Debug
        console.log('Get Texture: ', json);
        var material = new X3DMaterial(json.name, json.diffuseColor, json.shininess, json.specularColor, json.textureURL);
        try {
            // @ts-ignore
            UpdateTextureInline(material, mesh);
        }
        catch (error) {
        }
        // UpdateTexture(material);
    })
        .fail(function (d, textStatus, error) {
        console.log('ModelLoader: Server returned an Error, trap this in your PHP Server code');
        console.warn("getJSON failed, status: " + textStatus + ", error: " + error);
    });
}
function LoadTexture_HTML() {
    // @ts-ignore
    LoadTexture($("#selectTexture option:selected").val());
}
function LoadTexture_JQ() {
    $(document).ready(function () {
        $("#selectTexture").change(function () {
            var selection = $(this).val();
            LoadMesh_HTML();
            LoadTexture(selection);
        });
    });
}
function LoadAllTextures() {
}
function TestPrint() {
    console.log("THIS WORKS");
}
//# sourceMappingURL=ModelLoader.js.map