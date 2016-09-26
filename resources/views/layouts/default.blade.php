<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Ramon Schmidt Rocha">
    <link rel="icon" href="">

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

<div class="container">
    @yield('content')
</div>

<script src="{{elixir('js/app.js')}}"></script>
@yield('script')
</body>
</html>