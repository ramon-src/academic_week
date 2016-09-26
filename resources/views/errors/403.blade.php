<!DOCTYPE html>
<html>
    <head>
        <title>Sem permissão.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">DAI INFORMA</div>
                <h2>Você não tem permissão para entrar nessa página</h2>
                <div class="text-center">
                    <a class="btn btn-xs text-warning "  style="font-weight: bold;" href="{{url('/')}}"><i class="fa fa-logout"></i>Voltar para onde eu estava</a>
                </div>
            </div>
        </div>

        <script src="{{elixir('js/app.js')}}"></script>
    </body>
</html>
