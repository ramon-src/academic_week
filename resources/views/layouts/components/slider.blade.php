<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide"
                 src="https://fedoraproject.org/w/uploads/9/9c/F19-alpha-wallpaper-dawn.png"
                 alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Título da notícia.</h1>
                    <p>Note: If you're viewing this page via a  URL, the "next" and "previous"
                        Glyphicon buttons on the left and right might not load/display properly due to web browser
                        security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="{{url('/login')}}" role="button">LOGIN</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide"
                 src="http://orig07.deviantart.net/a1a6/f/2013/118/8/0/wallpaper_abstract_by_roby293-d63c6ka.jpg"
                 alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide"
                 src="http://hdwallpapersplace.com/wp-content/uploads/2015/09/blue-grid-abstract-hd-wallpaper.jpg"
                 alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->