/**
 * Used for loading assets
 *
 */
/**
 * loads all asset for Homepage
 *
 */
function AssetLoader_LoadALL_Homepage() {
    AssetLoader_img("carousel_img_3", "PinkCoke");
    AssetLoader_img("carousel_img_1", "CokeTruck");
    AssetLoader_img("carousel_img_2", "CokeBottles");
    AssetLoader_img("card_1_fancybox", "CokeRender");
    AssetLoader_img("card_2_fancybox", "SpriteRender");
    AssetLoader_img("card_3_fancybox", "FantaRender");
    AssetLoader_imgToBackground("fixed-background", "HomepageBackground");
    AssetLoader_TextInfo("carousel_1", "Carousel_1");
    AssetLoader_TextInfo("carousel_2", "Carousel_2");
    AssetLoader_TextInfo("carousel_3", "Carousel_3");
    AssetLoader_TextInfo("history", "History");
    AssetLoader_TextInfo("card_1", "Coke_About");
    AssetLoader_TextInfo("card_2", "Sprite_About");
    AssetLoader_TextInfo("card_3", "Fanta_About");
}
/**
 * loads all asset for About page
 *
 */
function AssetLoader_LoadALL_About() {
    AssetLoader_imgToBackground("fixed-background-about", "AboutBackground");
    AssetLoader_TextInfo("about_1", "About_1");
    AssetLoader_TextInfo("about_2", "About_2");
    AssetLoader_TextInfo("about_model", "About_Models");
    AssetLoader_TextInfo("transparency_reason", "Transparency_Reason");
    AssetLoader_TextInfo("SoO", "SoO");
    AssetLoader_TextInfo("libraries", "Libraries");
    AssetLoader_List("libraries-ol", "Libraries");
    AssetLoader_TextInfo("reference", "References");
    AssetLoader_List("reference-ol", "References");
}
/**
 * loads all asset for Deeper Understanding page
 *
 */
function AssetLoader_LoadALL_Deeper() {
    AssetLoader_imgToBackground("fixed-background-deeper", "DeeperBackground");
    AssetLoader_TextInfo("deeper", "Deeper_Understanding");
    AssetLoader_List("deeper-ol", "Deeper_Understanding");
}
/**
 * Loads images from the AssetTable database
 * @param id id of the element for the image to be loaded
 * @param assetName name of the asset in the database
 * @constructor
 */
function AssetLoader_img(id, assetName) {
    console.log('Selected Asset:', assetName);
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
                imgElement.setAttribute("href", json.Path);
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
/**
 * Loads images from the AssetTable database to the background-image
 * @param id id of the element for the image to be loaded
 * @param assetName name of the asset in the database
 * @constructor
 */
function AssetLoader_imgToBackground(id, assetName) {
    console.log('Selected Asset:', assetName);
    var urlAsset = "application/model/getAsset.php?assetName=" + assetName;
    console.log('URL to PHP Asset is:', urlAsset);
    $.getJSON(urlAsset)
        .done(function (json) {
        console.log('Get asset: ', json.Path);
        if (json.Path != null) {
            // @ts-ignore
            var imgElement = document.getElementById(id);
            if (imgElement != null) {
                imgElement.setAttribute("style", "background-image: url('" + json.Path + "')");
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
/**
 * Loads data from the TextInformation database
 * It loads data based on this mapping
 * <id>_title <- Title
 * <id>_subtitle <- Subtitle
 * <id>_content <- Content
 * <id>_url <- URL
 * <id>_image <- Img_Path
 * @param id id of the element for the image to be loaded
 * @param textName name of the entry in the database
 * @constructor
 */
function AssetLoader_TextInfo(id, textName) {
    console.log('Selected Asset:', textName);
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
                imgElement.setAttribute("href", json.Img_Path);
            }
            else {
                console.warn("Can't find element: " + id + "_img");
            }
            var linkElement = document.getElementById(id + "_url");
            if (linkElement != null) {
                linkElement.setAttribute("src", json.URL);
                linkElement.setAttribute("action", json.URL);
                linkElement.setAttribute("href", json.URL);
            }
            else {
                console.warn("Can't find element: " + id + "_url");
            }
            // AddInnerHtml(id+"_URL",json.Content);
        }
        else {
            console.error(textName + " Json is null");
        }
    })
        .fail(function (d, textStatus, error) {
        console.warn(" getAsset getJSON failed, status: " + textStatus + ", error: " + error);
    });
}
function AssetLoader_List(id, listName) {
    console.log('Selected Asset:', listName);
    //GETTING MESH
    var urlAsset = "application/model/getTextInfo.php?assetName=" + listName;
    console.log('URL to PHP Asset is:', urlAsset);
    $.getJSON(urlAsset)
        .done(function (json) {
        // @ts-ignore
        var listElement = document.getElementById(id);
        // AddInnerHtml(id + "_content", json.Content);
        var innerString = '';
        var temp = json.Content;
        var content = temp.split("\n");
        var splitHyper = [];
        content.forEach(function (value) {
            splitHyper = value.split("https://");
            temp = "<p class='mb-0'>" + value + "</p>";
            if (splitHyper[0].length > 0) {
                if (splitHyper.length > 1) {
                    splitHyper = splitHyper[1].split(" [Accessed: ");
                    temp += "<a target=\"_blank\" href=\"https://" + splitHyper[0] + "\"class=\"mb-2 btn btn-red btn-responsive\">To Page...</a>";
                }
                innerString += "<li>" + temp + "</li>";
            }
        });
        AddInnerHtml(id, innerString);
        if (json != null) {
        }
        else {
            console.error(listName + " Json is null");
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
        console.warn("Can't find element: " + id);
    }
}
//# sourceMappingURL=AssetLoader.js.map