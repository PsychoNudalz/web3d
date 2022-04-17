var xmlHttp = new XMLHttpRequest();
var numberOfColoumns = 2;
var htmlCode = "";
var response;
$(document).ready(function() {

    var send = "scripts/hook.php";
    xmlHttp.open("GET", send, true);
    xmlHttp.send(null);
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4) {
            //alert(xmlHttp.responseText);
            response = xmlHttp.responseText.split("~");
            htmlCode += '<tr>';
            for (var i = 0; i < response.length; i++) {
                htmlCode += '<td id="gallery_cell">';
                htmlCode += '<a href=""' + 'image/' + response[i] + '">';
                htmlCode += '<img src="images/' + response[i] + '"id="image_thumbnail" />';
                htmlCode += '</a>';
                htmlCode += '</td>';
                if (((i + 1) % numberOfColoumns) == 0) {
                    htmlCode += '</tr><tr>';
                }
            }
        }
        htmlCode += '</tr>';
        document.getElementById('gallery').innerHTML = htmlCode;
    }
});