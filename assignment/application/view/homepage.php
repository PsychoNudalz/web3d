<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active" id="carousel_1">
            <img id="carousel_img_1" src="">
            <div class="carousel-caption text-shadow-orange">
                <h1 id="carousel_1_title" class="display-2 text-shadow-orange">Title</h1>
                <h2 id="carousel_1_subtitle" class="text-shadow-orange">Sub Title</h2>
                <p id="carousel_1_content">Content</p>
            </div>
        </div>
        <div class="carousel-item text-shadow-orange" id="carousel_2">
            <img id="carousel_img_2" src="">
            <div class="carousel-caption">
                <h1 id="carousel_2_title" class="display-2 text-shadow-orange">PROGRAMMER</h1>
                <h2 id="carousel_2_subtitle" class="display-2 text-shadow-orange">C#, Java, Python, C++</h2>
            </div>
        </div>
        <div class="carousel-item text-shadow-orange" id="carousel_3">
            <img id="carousel_img_3" src="">
            <div class="carousel-caption">
                <h1 id="carousel_3_title" class="display-3 text-shadow-orange">PROGRAMMER</h1>
                <h2 id="carousel_3_subtitle" class="display-3 text-shadow-orange">C#, Java, Python, C++</h2>
            </div>
        </div>


    </div>
</div>

<!--- History -->
<div class="container-fluid Padding">
    <hr>
    <div class="row history bg-primary">
        <div id="history" class="row container-fluid padding latest-project ">
            <div class="col-sm-12 col-md-6 latest-project-img">
                <!--            <img src="img/Di-Jumper.png">-->
                <div class=" embed-responsive embed-responsive-16by9 project-deep-dive-progress-iframe mx-auto">

                    <iframe id="history_img" class="embed-responsive-item "
                            src="https://www.youtube.com/embed/xwJGR4aIqkc"></iframe>
                </div>
            </div>

            <div class=" col-md-6">
                <h1 id="history_title">History</h1>
                <h3 id="history_subtitle">History</h3>
                <p id="history_content"></p>

                <form id="history_url" action="https://nudalzmith.itch.io/di-jumper" method="get" target="_blank">
                    <button class="btn btn-outline-orange btn-lg" type="submit">ITCH PAGE</button>
                </form>
            </div>


        </div>

    </div>
    <hr>

</div>


<!--- Fixed background -->
<figure>
    <div class="fixed-wrap">
        <h1>Test</h1>
        <div id="fixed" style="">

        </div>
    </div>
</figure>


<!--cards-->
<div class="row">
    <div class="col-sm-12 col-md-4">

    <div id="card_1" class="card">
        <img id="card_1_img" class="card-img-top img-fluid img-thumbnail"
             src="">
        <div class="card-body">
            <div id="title_centre" class="card-title drinksText"><h2 id="card_1_title"></h2>
                <h2></h2></div>
            <div id="subTitle_centre" class="card-subtitle drinksText"><h3 id="card_1_subtitle"></h3></div>
            <div id="description_centre" class="card-text drinksText"><p id="card_1_content"></p></div>
            <a id="card_1_url" target="_blank" href=""
               class="btn btn-primary btn-responsive">Find out more ...</a>
        </div>

    </div>
    </div>
    <div class="col-sm-12 col-md-4">

        <div id="card_2 " class="card">
            <img id="card_2_img" class="card-img-top img-fluid img-thumbnail"
                 src="">

            <div class="card-body">
                <div id="title_centre" class="card-title drinksText"><h2 id="card_2_title"></h2>
                    <h2></h2></div>
                <div id="subTitle_centre" class="card-subtitle drinksText"><h3 id="card_2_subtitle"></h3></div>
                <div id="description_centre" class="card-text drinksText"><p id="card_2_content"></p></div>
                <a id="card_2_url" target="_blank" href=""
                   class="btn btn-primary btn-responsive">Find out more ...</a>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4">

    <div id="card_3" class="card">
        <img id="card_3_img" class="card-img-top img-fluid img-thumbnail"
             src="">
        <div class="card-body">
            <div id="title_centre" class="card-title drinksText"><h2 id="card_3_title"></h2>
                <h2></h2></div>
            <div id="subTitle_centre" class="card-subtitle drinksText"><h3 id="card_3_subtitle"></h3></div>
            <div id="description_centre" class="card-text drinksText"><p id="card_3_content"></p></div>
            <a id="card_3_url"target="_blank"
               class="btn btn-primary btn-responsive" href="">Find out more ...</a>
        </div>

    </div>
    </div>


</div>

<script type="text/javascript">
    $(document).ready(function () {
        AssetLoader_LoadALL();
    });
</script>