$(document).ready(function () {
    selectPage();
});

function ChangeToModel() {
    $('#HOMEPAGE').hide();

    $('#MODEL').show();
    console.log("Click model");
}

function selectPage() {
    var selectedPage: boolean = false;
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

    $('#navModel_Can').click(function () {
        selectedPage = true;
        ChangeToModel();
    });    $('#navModel_Bottle').click(function () {
        selectedPage = true;
        ChangeToModel();
    });    $('#navModel_Glass').click(function () {
        selectedPage = true;
        ChangeToModel();
    });

}
