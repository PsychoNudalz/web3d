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
                <h1  id="carousel_1_title" class="display-2 text-shadow-orange">Title</h1>
                <h2  id="carousel_1_subtitle" class="text-shadow-orange">Sub Title</h2>
                <p id="carousel_1_content">Content</p>
            </div>
        </div>
        <div class="carousel-item text-shadow-orange">
            <img id="carousel_img_2" src="">
            <div class="carousel-caption">
                <h1 class="display-2 text-shadow-orange">PROGRAMMER</h1>
                <h2 class="display-2 text-shadow-orange">C#, Java, Python, C++</h2>
            </div>
        </div>
        <div class="carousel-item">
            <img id="carousel_img_3" src="">
            <div class="carousel-caption">
                <h1 class="display-2 text-shadow-orange">GAME DESIGNER</h1>
                <h2 class="display-2 text-shadow-orange">Unity, Pygame</h2>
                <h3 class="display-2 text-shadow-orange">More than 10 published games</h3>

            </div>
        </div>

    </div>
</div>

<!--- History -->
<div class="container-fluid Padding">
    <hr>
    <div class="row about-me bg-primary">
        <div id="history" class="row container-fluid padding latest-project ">
            <div class="col-sm-12 col-md-6 latest-project-img">
                <!--            <img src="img/Di-Jumper.png">-->
                <div class=" embed-responsive embed-responsive-16by9 project-deep-dive-progress-iframe mx-auto">

                    <iframe id="history_img" class="embed-responsive-item " src="https://www.youtube.com/embed/xwJGR4aIqkc"></iframe>
                </div>
            </div>

            <div class=" col-md-6">
                <h1 id="history_title">History</h1>
                <h3 id="history_subtitle">History</h3>
                <p id="history_content"> </p>

                <form  id="history_url" action="https://nudalzmith.itch.io/di-jumper" method="get" target="_blank">
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
        <div id="fixed">

        </div>
    </div>
</figure>



<script type="text/javascript">
    $(document).ready(function () {
        AssetLoader_LoadALL();
    });
</script>