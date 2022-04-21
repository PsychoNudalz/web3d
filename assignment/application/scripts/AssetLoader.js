function AssetLoader_LoadALL() {
    AssetLoader_img("carousel_img_1", "CokeTruck");
    AssetLoader_img("carousel_img_2", "CokeBottles");
    AssetLoader_TextInfo("carousel_1", "Carousel_1");
}
1;
function AssetLoader_img(id, assetName) {
    console.log('Selected Asset:', assetName);
    //GETTING MESH
    var urlAsset = "application/model/getAsset.php?assetName=" + assetName;
    console.log('URL to PHP Asset is:', urlAsset);
    $.getJSON(urlAsset)
        .done(function (json) {
        console.log('Get asset: ', json.Path);
        if (json.Path != null) {
            // @ts-ignore
            var imgElement = document.getElementById(id);
            if (imgElement != null) {
                imgElement.setAttribute("src", json.Path);
            }
            else {
                console.error("Can't find element: " + id);
            }
            console.log("Asset: " + assetName + " Loaded to: " + id);
        }
        else {
            console.error("Can not load asset at: " + json.Path);
        }
    })
        .fail(function (d, textStatus, error) {
        console.warn(" getAsset getJSON failed, status: " + textStatus + ", error: " + error);
    });
}
function AssetLoader_TextInfo(id, textName) {
    console.log('Selected Asset:', textName);
    //GETTING MESH
    var urlAsset = "application/model/getTextInfo.php?assetName=" + textName;
    console.log('URL to PHP TextInfo is:', urlAsset);
    $.getJSON(urlAsset)
        .done(function (json) {
        if (json != null) {
            console.log('Get TextInfo: ', json.Title);
            // @ts-ignore
            AddInnerHtml(id + "_title", json.Title);
            AddInnerHtml(id + "_subtitle", json.Subtitle);
            AddInnerHtml(id + "_content", json.Content);
            var imgElement = document.getElementById(id + "_img");
            if (imgElement != null) {
                imgElement.setAttribute("src", json.Img_Path);
            }
            else {
                console.error("Can't find element: " + id + "_img");
            }
            var linkElement = document.getElementById(id + "_url");
            if (linkElement != null) {
                linkElement.setAttribute("src", json.URL);
                linkElement.setAttribute("action", json.URL);
            }
            else {
                console.error("Can't find element: " + id + "_url");
            }
            // AddInnerHtml(id+"_URL",json.Content);
        }
        else {
            console.error("Json is null");
        }
    })
        .fail(function (d, textStatus, error) {
        console.warn(" getAsset getJSON failed, status: " + textStatus + ", error: " + error);
    });
}
function AddInnerHtml(id, text) {
    var tempElement = document.getElementById(id);
    if (tempElement != null) {
        tempElement.innerHTML = text;
        console.log("Asset: " + text + " Loaded to: " + id);
    }
    else {
        console.error("Can't find element: " + id);
    }
}
//# sourceMappingURL=AssetLoader.js.map