function LoadPhp_Homepage(){
    var url:string = "index.php?apiLoadPage_Homepage";
    $("#HOMEPAGE").load(url);
    
}

function LoadPhp_Model() {
    var url: string = "index.php?apiLoadPage_Model";
    $("#MODEL").load(url);

}
function LoadPhp_About() {
    var url = "index.php?apiLoadPage_About";
    $("#ABOUT").load(url);
}
function LoadPhp_Deeper() {
    var url = "index.php?apiLoadPage_Deeper";
    $("#DEEPER").load(url);
}

function LoadPhp_x3dController() {
    var url: string = "index.php?apiLoadPage_x3dController";
    // @ts-ignore
    document.getElementById("x3dController").innerHTML="";
    $("#x3dController").load(url);
}

function LoadPhp_Navbar(){
    var url: string = "index.php?apiLoadPage_navbarPHP";
    $("#navbarPHP").load(url);
}