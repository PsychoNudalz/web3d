$(document).ready(function () {
    selectPage();
});
function ChangeToModel() {
    ResetPages();
    $('#HOMEPAGE').hide();
    $('#MODEL').show();
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
        ChangeToModel();
    });
    $('#navModel_Bottle').click(function () {
        selectedPage = true;
        ChangeToModel();
    });
    $('#navModel_Glass').click(function () {
        selectedPage = true;
        ChangeToModel();
    });
}
//# sourceMappingURL=ContentSwapper.js.map