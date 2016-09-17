@extends('api.dashboard')

@section('content')
    <section id="schedule-day-container">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1>{{$event_schedule->event->name}}
                    <span class="small">
                        - {{getWeekDay($event_schedule->date)}} ({{getDayAndMonth($event_schedule->date)}})
                    </span>
                </h1>
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
                                        <div class="col-lg-2">
                                            <a class="btn btn-xs btn-success btn-participate"><i
                                                        class="fa fa-thumbs-o-up"></i>Participar</a>
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
                                             aria-controls="lecture-{{$course->id}}">
                                            <span class="init_hour">{{$course->init_hour}}</span>&nbsp;-&nbsp;
                                            <span class="end_hour">{{$course->end_hour}}</span>
                                            <span class="subject">{{$course->subject}}</span>
                                            <span class="local">
                                                <i class="fa fa-map-marker"></i>{{$course->local}}</span>
                                        </div>
                                        <div class="col-lg-2">
                                            <a class="btn btn-xs btn-success btn-participate"><i
                                                        class="fa fa-thumbs-o-up"></i>Participar</a>
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
@endsection