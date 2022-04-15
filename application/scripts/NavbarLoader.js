function LoadNavbar(){
    var htmlString ="  <div class=\"container-fluid\">\n" +
        // "        <a class=\"navbar-brand\" href=\"#\"><img src=\"img/icon.png\"></a>\n" +
        "        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"\n" +
        "                data-target=\"#navbarResponsive\">\n" +
        "            <span class=\"navbar-toggler-icon\"> </span>\n" +
        "        </button>\n" +
        "        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">\n" +
        "            <ul class=\"navbar-nav ml-auto text-orange\">\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a class=\"nav-link\" href=\"index_OLD.php\">Home</a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item dropdown\">\n" +
        "                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDrop\" data-toggle=\"dropdown\">\n" +
        "                        Projects\n" +
        "                    </a>\n" +
        "                    <div class=\"dropdown-menu bg-primary \">\n" +
        "                        <a class=\"dropdown-item\" href=\"TopProjects.html\">Top</a>\n" +
        "                        <a class=\"dropdown-item\" href=\"Projects.html\">Prototypes</a>\n" +
        "                        <a class=\"dropdown-item\" href=\"Models.html\">Models</a>\n" +
        "                        <a class=\"dropdown-item\" href=\"Projects.html\">All</a>\n" +
        "                    </div>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a class=\"nav-link\" href=\"Contacts.html\">Contacts</a>\n" +
        "                </li>\n" +
        "                <li class=\"nav-item\">\n" +
        "                    <a class=\"nav-link\" target=\"_blank\" href=\"https://nudalzmith.itch.io/\">itch.io</a>\n" +
        "                </li>\n" +
        "            </ul>\n" +
        "        </div>\n" +
        "    </div>\n"

var projectContainer = document.getElementById("LoadNavbar");
    projectContainer.innerHTML = htmlString;

}
