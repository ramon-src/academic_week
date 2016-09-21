@extends('api.dashboard')
@inject('events', 'AcademicDirectory\Domains\Services\EventsService')
@section('content')
    <section id="schedule-day-container" event-schedule="{{$event_schedule->id}}">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>{{$event_schedule->event->name}}
                    <span class="small">
                        - {{getWeekDay($event_schedule->date)}} ({{getDayAndMonth($event_schedule->date)}})
                    </span>
                </h1>

                @if($events->isUserSubscriberInEvent($event_schedule->event_id, auth()->id()))
                    <div class="event-notification page-header text-warning">
                        <p>Você ainda não está inscrito no evento.</p>
                        <p>Para que você possa participar das palestras e cursos entregue 1 kg de alimento não perecível
                            (exceto sal) no DAI</p>
                        <p class="text-success">Na entrega do kg de alimento, todas as palestras pendentes
                            automaticamente serão confirmadas</p>
                        <p class="text-success">Mas se as palestras já estiverem lotadas pode acontecer de você não
                            poder participar. Então corra para não perder a sua vaga!!!</p>
                        <p class="text-primary"><i class="fa fa-map-marker"></i> Prédio 32, Sala 106 em frente ao bar
                        </p>
                    </div>
                @endif
                <div class="page-header">
                    <h2>Palestras</h2>
                </div>
                <div class="panel-group" id="lectures" role="tablist" aria-multiselectable="true">
                    @foreach($lectures->sortBy('init_hour') as $lecture)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-{{$lecture->id}}">
                                <div class="row">
                                    <div class="panel-title">
                                        <div class="col-lg-10" role="button" data-toggle="collapse"
                                             data-parent="#lectures"
                                             href="#lecture-{{$lecture->id}}" aria-expanded="true"
                                             aria-controls="lecture-{{$lecture->id}}">
                                            <span class="init_hour">{{$lecture->init_hour}}</span>&nbsp;-&nbsp;
                                            <span class="end_hour">{{$lecture->end_hour}}</span>
                                            <span class="subject">{{$lecture->subject}}</span>
                                            <span class="local">
                                                <i class="fa fa-map-marker"></i>{{$lecture->local}}</span>
                                        </div>
                                        <div class="col-lg-2 div-buttons" id="lecture-buttons-{{$lecture->id}}">
                                            <span data-lecture="{{$lecture->id}}"
                                                  data-url="/participar/programacao/{{$event_schedule->id}}/palestra/{{$lecture->id}}"
                                                  class="btn btn-xs btn-success btn-participate">
                                                <i class="fa fa-user-plus"></i>Participar
                                            </span>
                                            <span data-lecture="{{$lecture->id}}"
                                                  class="btn btn-xs btn-info btn-participate">
                                                <i class="fa fa-user-check"></i>Participando
                                            </span>
                                            <span data-lecture="{{$lecture->id}}"
                                                  data-url="/desinscrever/palestra/{{$lecture->id}}"
                                                  class="btn btn-xs btn-danger btn-participate">
                                                <i class="fa fa-user-times"></i>Desinscrever
                                            </span>
                                            <span data-lecture="{{$lecture->id}}"
                                                  class="btn btn-xs btn-waiting btn-participate">
                                                <i class="fa fa-check"></i>Pendente
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="lecture-{{$lecture->id}}" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="heading-{{$lecture->id}}">
                                <div class="panel-body">
                                    {{$lecture->description}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="page-header">
                    <h2>Cursos</h2>
                </div>
                <div class="panel-group" id="courses" role="tablist" aria-multiselectable="true">
                    @foreach($courses->sortBy('init_hour') as $course)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading-{{$course->id}}">
                                <div class="row">
                                    <div class="panel-title">
                                        <div class="col-lg-10" role="button" data-toggle="collapse"
                                             data-parent="#courses"
                                             href="#course-{{$course->id}}" aria-expanded="true"
                                             aria-controls="course-{{$course->id}}">
                                            <span class="init_hour">{{$course->init_hour}}</span>&nbsp;-&nbsp;
                                            <span class="end_hour">{{$course->end_hour}}</span>
                                            <span class="subject">{{$course->subject}}</span>
                                            <span class="local">
                                                <i class="fa fa-map-marker"></i>{{$course->local}}</span>
                                        </div>
                                        <div class="col-lg-2 div-buttons" id="lecture-buttons-{{$course->id}}">
                                            <span data-lecture="{{$course->id}}"
                                                  data-url="/participar/programacao/{{$event_schedule->id}}/palestra/{{$course->id}}"
                                                  class="btn btn-xs btn-success btn-participate">
                                                <i class="fa fa-user-plus"></i>Participar
                                            </span>
                                            <span data-lecture="{{$course->id}}"
                                                  class="btn btn-xs btn-info btn-participate">
                                                <i class="fa fa-user-check"></i>Participando
                                            </span>
                                            <span data-lecture="{{$course->id}}"
                                                  data-url="/desinscrever/palestra/{{$course->id}}"
                                                  class="btn btn-xs btn-danger btn-participate">
                                                <i class="fa fa-user-times"></i>Desinscrever
                                            </span>
                                            <span data-lecture="{{$course->id}}"
                                                  class="btn btn-xs btn-waiting btn-participate">
                                                <i class="fa fa-check"></i>Pendente
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="course-{{$course->id}}" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="heading-{{$course->id}}">
                                <div class="panel-body">
                                    {{$course->description}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript">
        var ev_schedule_id = document.getElementById('schedule-day-container').getAttribute('event-schedule');
        var manipulated_btn;
        $(window).on('load', function () {
            $('.btn-participate.btn-success').show();
            $.ajax({
                url: '/get/palestras/' + ev_schedule_id,
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    if (data.status) {
                        $.each(data.lectures_subscribed, function (k, v) {
                            var div = $('#lecture-buttons-' + v.id);
                            div.children(".btn-success").hide();
                            if ($('.event-notification').is(':visible')) {
                                div.children(".btn-waiting").show();
                            } else {
                                div.children(".btn-info").show();
                            }
                        });
                    }
                },
                error: function () {

                }
            });
            $('.btn-participate').click(function () {
                $(this).attr('disabled', 'disabled');
                var url = $(this).attr('data-url');
                $.ajax({
                    url: url,
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 'conflict') {
                            $('.panel-default').removeClass('border-conflict');
                            $('.conflict-arrow').remove();
                            $.each(data.conflict_ids, function (k, value) {
                                var i = document.createElement("i");
                                i.setAttribute('class', 'fa fa-2x fa-arrow-right conflict-arrow')
                                var heading = document.getElementById('heading-' + value);
                                var parent = heading.parentElement;
                                parent.setAttribute('class', 'panel panel-default border-conflict');
                                $(heading).before(i);
                            });
                        }
                        setTimeout(function () {
                            $('#lecture-buttons-' + data.lecture_id + ' .btn-participate').hide();
                            if (data.status == 'deleted') {
                                $('#lecture-buttons-' + data.lecture_id + ' .btn-success').show();
                            }
                            if (data.status == true ) {
                                if (data.subs == true) {
                                    $('#lecture-buttons-' + data.lecture_id + ' .btn-info').show();
                                } else {
                                    $('#lecture-buttons-' + data.lecture_id + ' .btn-waiting').show();
                                }
                            }
                            if(data.status == 'maxpeople'){
                                alert(data.message);
                            }
                        }, 500);
                    },
                    error: function () {

                    },
                    done: function () {
                        $(this).removeAttr('disabled');
                    }
                });
            });
            $('.div-buttons').mouseenter(function () {
                var button = $(this).children('.btn-participate:visible');
                manipulated_btn = button;
                if (button.hasClass('btn-info') || button.hasClass('btn-waiting')) {
                    button.hide();
                    $(this).children('.btn-danger').show();
                }
            }).mouseleave(function () {
                var button = $(this).children('.btn-participate:visible');
                $(button).hide();
                manipulated_btn.show();
            });
        });


    </script>
@endsection