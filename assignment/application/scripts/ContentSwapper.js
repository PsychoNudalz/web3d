$(document).ready(function () {
    selectPage();
});
function ChangeToModel() {
    ResetPages();
    $('#HOMEPAGE').hide();
    $('#MODEL').show();
    var selection = $("#selectMesh").val();
    if (selection != null) {
        // LoadMesh(selection);
        SetAllMeshVisible(false);
        // SetActiveMeshVisible(selection, true);
        // @ts-ignore
        SwitchActiveMesh(selection);
        LoadTexture($("#selectTexture option:selected").val());
    }
    console.log("Click model");
}
function ResetPages() {
    $('#HOMEPAGE').show();
    $('#ABOUT').hide();
    $('#MODEL').hide();
}
function selectPage() {
    var selectedPage = false;
    console.log("Page change");
    ResetPages();
    $('#navHome').click(function () {
        selectedPage = true;
        console.log("Page change: Home");
        ResetPages();
        $('#HOMEPAGE').show();
    });
    $('#navAbout').click(function () {
        selectedPage = true;
        ResetPages();
        $('#HOMEPAGE').hide();
        $('#ABOUT').show();
    });
    $('#navModel_Can').click(function () {
        selectedPage = true;
        $("#selectMesh").val("Can");
        ChangeToModel();
    });
    $('#navModel_Bottle').click(function () {
        selectedPage = true;
        $("#selectMesh").val("Bottle");
        ChangeToModel();
    });
    $('#navModel_Glass').click(function () {
        selectedPage = true;
        $("#selectMesh").val("Glass");
        ChangeToModel();
    });
}
//# sourceMappingURL=ContentSwapper.js.map