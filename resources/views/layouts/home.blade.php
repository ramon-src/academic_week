<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Ramon Schmidt Rocha">
    <link rel="icon"
          href="https://scontent-gru2-1.xx.fbcdn.net/v/t1.0-9/1238940_1409981412549282_808186175_n.jpg?oh=bfcb3537125ff20ca5582b40e8b72cdd&oe=587C19CD">

    <title>Diretório Acadêmico - PUCRS</title>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{elixir('css/app.css')}}"/>
</head>
<!-- NAVBAR
================================================== -->
<body>
@include('layouts.header.default')

@include('layouts.components.slider')

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
@yield('content')
<!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            <img class="img-circle"
                 src="http://www.seodiesel.com/img/login/register.png"
                 alt="Generic placeholder image" width="140" height="140">
            <h2>SEMANA ACADÊMICA</h2>
            <p class="text-center">Organizada pela atual gestão do Diretório Acadêmico da Informática da PUCRS, com o
                intuito de envolver as pessoas como também compartilhar e gerar conhecimento.</p>
            <p>Inscreva-se apenas doando 1kg de alimento!</p>
            <p>
                <a class="btn btn-default" href="{{route('web.event.schedule', ['semana-academica-2016' , 1])}}" role="button"><i class="fa fa-calendar"></i> Programação</a>
                <a class="btn btn-default" href="{{url('/registrar')}}" role="button">Inscrição &raquo;</a>
            </p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            <span slide-target="#passo-a-passo"><i class="fa fa-3x fa-arrow-down"></i></span>
        </div>
    </div>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette" id="passo-a-passo" >
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <img class="featurette-image img-responsive center-block" src="imgs/subscribe_step_by_step.jpg"
                 alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    @include('layouts.footer.default')

</div><!-- /.container -->
<script src="{{elixir('js/app.js')}}"></script>
@yield('script')
</body>
</html>
