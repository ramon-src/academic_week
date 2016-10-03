@extends('layouts.default')

@section('content')
    @inject('eventService', 'AcademicDirectory\Domains\Services\EventsService')
    <div id="schedule-day-container-web">
        <div class="page-header">
            <h1>
                {{$event->name}}
                <a href="{{url('/')}}" class="btn btn-default pull-right"><i class="fa fa-reply"></i> Voltar</a>
            </h1>
        </div>
        {{$event->description}}

        <div class="page-header">
            <h1>Programação
                <small>De {{$event->minDateFormatted()}} à {{$event->maxDateFormatted()}}</small>
                <a href="{{url('/registrar')}}" class="btn btn-success pull-right"><i class="fa fa-edit"></i> Inscrever-me</a>
            </h1>
        </div>
        <div class="row">
            <ul class="nav nav-tabs" role="tablist">
                @foreach($event->schedule->sortBy('date') as $key => $schedule)
                    <li role="presentation" @if($key == 0)class="active"@endif>
                        <a href="#{{$schedule->id}}" aria-controls="{{$schedule->id}}" role="tab"
                           data-toggle="tab">{{getWeekDay($schedule->date)}} ({{getDayAndMonth($schedule->date)}})</a>
                    </li>
                @endforeach
            </ul>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="schedule-content">
                <div class="tab-content">
                    @foreach($event->schedule->sortBy('date') as $key => $schedule)
                        <div role="tabpanel" class="tab-pane @if($key == 0) active @endif" id="{{$schedule->id}}">
                            <section event-schedule-id="{{$schedule->id}}">
                                <div class="page-header">
                                    <h2>Palestras</h2>
                                </div>
                                <div class="panel-group" id="lectures" role="tablist" aria-multiselectable="true">
                                    @foreach($eventService->getAllLecturesFromScheduleId($schedule->id)->sortBy('init_hour') as $lecture)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading-{{$lecture->id}}">
                                                <div class="row">
                                                    <div class="panel-title">
                                                        <div class="col-lg-12" role="button" data-toggle="collapse"
                                                             data-parent="#lectures"
                                                             href="#lecture-{{$lecture->id}}" aria-expanded="true"
                                                             aria-controls="lecture-{{$lecture->id}}">
                                                            <span class="init_hour">{{$lecture->init_hour}}</span>&nbsp;-&nbsp;
                                                            <span class="end_hour">{{$lecture->end_hour}}</span>
                                                            <span class="subject">{{$lecture->subject}}</span>
                                            <span class="local">
                                                <i class="fa fa-map-marker"></i>{{$lecture->local}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="lecture-{{$lecture->id}}" class="panel-collapse collapse"
                                                 role="tabpanel"
                                                 aria-labelledby="heading-{{$lecture->id}}">
                                                <div class="panel-body">
                                                    {{$lecture->description}}
                                                    <hr>
                                                    <span class="pull-right">Capacidade: {{$lecture->max_people}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="page-header">
                                    <h2>Cursos</h2>
                                </div>
                                <div class="panel-group" id="courses" role="tablist" aria-multiselectable="true">
                                    @foreach($eventService->getAllCoursesFromScheduleId($schedule->id)->sortBy('init_hour') as $course)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading-{{$course->id}}">
                                                <div class="row">
                                                    <div class="panel-title">
                                                        <div class="col-lg-12" role="button" data-toggle="collapse"
                                                             data-parent="#courses"
                                                             href="#course-{{$course->id}}" aria-expanded="true"
                                                             aria-controls="course-{{$course->id}}">
                                                            <span class="init_hour">{{$course->init_hour}}</span>&nbsp;-&nbsp;
                                                            <span class="end_hour">{{$course->end_hour}}</span>
                                                            <span class="subject">{{$course->subject}}</span>
                                            <span class="local">
                                                <i class="fa fa-map-marker"></i>{{$course->local}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="course-{{$course->id}}" class="panel-collapse collapse"
                                                 role="tabpanel"
                                                 aria-labelledby="heading-{{$course->id}}">
                                                <div class="panel-body">
                                                    {{$course->description}}
                                                    <hr>
                                                    <span class="pull-right">Capacidade: {{$course->max_people}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection