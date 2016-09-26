<div class="panel-heading">
    <span id="widget-event-title">Ativar usuários</span>
</div>
<div class="panel-body">
    <div id="widget-events-content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('search.user.by.rg') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('rg') ? ' has-error' : '' }}">
                        <label for="rg" class="col-md-4 control-label">RG</label>

                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <input id="rg" type="text" class="form-control" name="rg" value="{{ old('rg') }}" required
                                   autofocus>

                            @if ($errors->has('rg'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('rg') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <a class="btn btn-default">
                                Limpar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-search"></i>Pesquisar
                            </button>

                        </div>
                    </div>
                </form>
            </div>
            @if(count($users) > 0)
                <form class="form-horizontal" role="form" method="POST"
                      action="{{ route('active.user.in.event') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-condensed table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>RG</th>
                                        <th width="1%">Ações</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->rg}}
                                            </td>
                                            <td class="text-center">
                                                <input type="radio" name="user_id" value="{{$user->id}}">
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group{{ $errors->has('event_id') ? ' has-error' : '' }}">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="event_id">Escolha o evento</label>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <select class="form-control" name="event_id">
                                        @foreach($events as $event)
                                            <option value="{{$event->id}}">{{$event->name}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('event_id'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('event_id') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                            <a class="btn btn-default">
                                Limpar
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-thumbs-o-up"></i>Ativar
                            </button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>