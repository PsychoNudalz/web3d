$(document).ready(function () {
    selectPage();
});
function selectPage() {
    var selectedPage = false;
    console.log("Page change");
    $('#HOMEPAGE').show();
    $('#ABOUT').hide();
    $('#MODEL').hide();
    $('#navHome').click(function () {
        selectedPage = true;
        console.log("Page change: Home");
        $('#HOMEPAGE').show();
    });
    $('#navAbout').click(function () {
        selectedPage = true;
        $('#HOMEPAGE').hide();
        $('#ABOUT').show();
    });
    $('#navModel').click(function () {
        selectedPage = true;
        $('#HOMEPAGE').hide();
        $('#MODEL').show();
        console.log("Click model");
    });
}
//# sourceMappingURL=ContentSwapper.js.map