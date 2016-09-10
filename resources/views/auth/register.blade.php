@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Faça a sua inscrição!</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/registrar') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Sou aluno da PUCRS</label>

                                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                                    <input type="checkbox" id="puc_checkbox"
                                           name="puc_checkbox" {{(old('puc_checkbox'))?'checked="checked"':''}}>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('registry_number') ? ' has-error' : '' }}"
                                 id="registry_number_div">

                                <label for="registry_number" class="col-md-4 control-label">N° da Matrícula</label>

                                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                                    <input type="text" name="registry_number" id="registry_number"
                                           value="{{ old('registry_number') }}" class="form-control"
                                           placeholder="Insira o número da matrícula"/>
                                    @if ($errors->has('registry_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('registry_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rg" class="col-md-4 control-label">RG</label>
                                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
                                    <input id="rg" type="text" name="rg" maxlength="10" minlength="10"
                                           class="form-control" value="{{ old('rg') }}"
                                           required="required"/>
                                    @if ($errors->has('rg'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rg') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirme sua senha</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" id="subscrib" class="btn btn-success">
                                        Inscrever-se
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        if ($('#puc_checkbox').is(':checked')) {
            $('#registry_number').attr('required', 'required');
            $('#registry_number_div').show(500);
        }
        $('#puc_checkbox').click(function () {
            var registry_input = $('#registry_number');
            if ($(this).is(':checked')) {
                registry_input.attr('required', 'required');
                $('#registry_number_div').show(500);
            } else {
                registry_input.removeAttr('required');
                $('#registry_number_div').hide(500);
            }
        });
    </script>
@endsection