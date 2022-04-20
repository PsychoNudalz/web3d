function AssetLoader_LoadALL(){
    AssetLoader_img("carousel_img_1","CokeTruck");
}


function AssetLoader_img(id: string, assetName: string) {
    console.log('Selected Asset:', assetName);
    //GETTING MESH
    var urlAsset = "application/model/getAsset.php?assetName=" + assetName;
    console.log('URL to PHP Asset is:', urlAsset);
    var getJSONFail: boolean = true;
    $.getJSON(urlAsset)
        .done(function (json) {
            console.log('Get Mesh: ', json.Path);
            if (json.Path != null) {
                // @ts-ignore
                var imgElement = document.getElementById("id");
                if (imgElement != null) {
                    imgElement.setAttribute("src", json.Path);

                }
                console.log("Asset: "+assetName+" Loaded to: "+id);

            } else {
                console.error("Can not load asset at: " + json.Path);
            }
            getJSONFail = false;
        })
        .fail(function (d, textStatus, error) {
            console.warn(" getAsset getJSON failed, status: " + textStatus + ", error: " + error)

        });
}