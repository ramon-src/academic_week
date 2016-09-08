@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="page-header">
                <h1>Faça a sua inscrição
                    <small></small>
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form class="form-horizontal" action="{{route('web.inscricao.salvar')}}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="event_id" value="">
                <div class="form-group">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <label class="control-label pull-right">Sou aluno da PUCRS</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                        <input type="checkbox" id="puc_checkbox" class="form-control">
                    </div>
                </div>
                <div class="form-group" id="registry_number_div">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <label for="registry_number" class="control-label pull-right">N° da Matrícula</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                        <input type="text" name="registry_number" id="registry_number" class="form-control" placeholder="Insira o número da matrícula"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <label for="name" class="control-label pull-right">Nome</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                        <input type="text" name="name" class="form-control" value="" placeholder="Insira seu nome"
                               required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <label for="rg" class="control-label pull-right">RG</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                        <input type="text" name="rg" class="form-control" value="" placeholder="Insira seu rg"
                               required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <label for="email" class="control-label pull-right">Email</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                        <input type="email" name="email" class="form-control" value="" placeholder="Insira seu email"
                               required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <label for="password" class="control-label pull-right">Senha</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                        <input type="password" name="password" class="form-control" value=""
                               placeholder="Insira uma senha" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <label for="confirm_password" class="control-label pull-right">Confirme sua senha</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                        <input type="password" name="confirm_password" class="form-control" value=""
                               placeholder="Repita a senha" required="required"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Inscrever-se
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $('#puc_checkbox').click(function () {
            var registry_input = $('#registry_number');
            if($(this).is(':checked')) {
                registry_input.attr('required', 'required');
                $('#registry_number_div').show(500);
            }else{
                registry_input.removeAttr('required');
                $('#registry_number_div').hide(500);
            }
        });
    </script>
@endsection