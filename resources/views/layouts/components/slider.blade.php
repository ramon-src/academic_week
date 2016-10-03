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
                 src="imgs/facin.jpg"
                 alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Fique ligado nos eventos!</h1>
                    <p><a class="btn btn-lg btn-primary" href="{{url('/login')}}" role="button">
                            <i class="fa fa-user"></i>LOGIN</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="first-slide"
                 src="imgs/global.jpg"
                 alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Fique ligado nos eventos!</h1>
                    <p><a class="btn btn-lg btn-primary" href="{{url('/login')}}" role="button">
                            <i class="fa fa-user"></i>LOGIN</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="first-slide"
                 src="imgs/global2.jpg"
                 alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Fique ligado nos eventos!</h1>
                    <p><a class="btn btn-lg btn-primary" href="{{url('/login')}}" role="button">
                            <i class="fa fa-user"></i>LOGIN</a></p>
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