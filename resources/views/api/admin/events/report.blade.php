@extends('layouts.report')

@section('content')
    @inject('eventService', 'AcademicDirectory\Domains\Services\EventsService')
    <div id="schedule-day-container-web">
        <div class="page-header">
            <h4>Lista: {{$event->name}} <a href="{{url('/')}}" class="btn btn-default btn-xs pull-right"><i
                            class="fa fa-reply"></i> Voltar</a></h4>
            <h4>Programação
                <small>De {{$event->minDateFormatted()}} à {{$event->maxDateFormatted()}}</small>
            </h4>
        </div>
        @foreach($event->schedule->sortBy('date') as $key => $schedule)
            <div class="page-header">
                <h4>{{getWeekDay($schedule->date)}} ({{getDayAndMonth($schedule->date)}})</h4>
                <h4>Palestras</h4>
            </div>
            @foreach($eventService->getAllLecturesFromScheduleId($schedule->id)->sortBy('init_hour') as $lecture)
                <div style="width: 20%; float: left;"><span
                            style="font-size: 12px; font-weight:bold;">{{str_limit($lecture->subject, 22)}}</span></div>
                <div style="width: 25%; float: left;"><span style="font-size: 10px;"><span
                                class="local">{{$lecture->local}}</span></span></div>
                <div style="width: 20%; float: left;"><span style="font-size: 10px;">{{$lecture->init_hour}}
                        &nbsp;-&nbsp;{{$lecture->end_hour}}</span></div>
                <div style="width: 20%; float: left;"><span style="font-size: 10px;">Capc: {{$lecture->max_people}} |
                            Part: {{$lecture->user_subs}}</span></div>
                <br>
                @foreach($eventService->getAllUsersParticipatsInLecture($lecture->id) as $id => $user)
                    <div style="width: 1%; float: left;"><span>{{++$id}}</span></div>
                    <div style="width: 20%; float: left;"><span style="font-size: 10px;">{{$user->name}}</span></div>
                    <div style="width: 20%; float: left;"><span style="font-size: 10px;">{{$user->rg}}</span></div>
                    <div style="width: 20%; float: left;"><span
                                style="font-size: 10px;">{{$user->instituition_register}}</span></div>
                    <div style="width: 20%; float: left;"><span style="font-size: 10px;">{{$user->email}}</span></div>
                    <br>
                @endforeach
                <hr>
            @endforeach
            <div class="page-header">
                <h4>Cursos</h4>
            </div>

            @foreach($eventService->getAllCoursesFromScheduleId($schedule->id)->sortBy('init_hour') as $course)
                <div style="width: 20%; float: left;"><span
                            style="font-size: 12px; font-weight:bold;">{{str_limit($course->subject, 22)}}</span></div>
                <div style="width: 25%; float: left;"><span style="font-size: 10px;"><span
                                class="local">{{$course->local}}</span></span></div>
                <div style="width: 20%; float: left;"><span style="font-size: 10px;">{{$course->init_hour}}
                        &nbsp;-&nbsp;{{$course->end_hour}}</span></div>
                <div style="width: 20%; float: left;"><span style="font-size: 10px;">Capc: {{$course->max_people}} |
                            Part: {{$course->user_subs}}</span></div>
                <br>
                @foreach($eventService->getAllUsersParticipatsInLecture($course->id) as $id => $user)
                    <div style="width: 1%; float: left;"><span>{{++$id}}</span></div>
                    <div style="width: 20%; float: left;"><span style="font-size: 10px;">{{$user->name}}</span></div>
                    <div style="width: 20%; float: left;"><span style="font-size: 10px;">{{$user->rg}}</span></div>
                    <div style="width: 20%; float: left;"><span
                                style="font-size: 10px;">{{$user->instituition_register}}</span></div>
                    <div style="width: 20%; float: left;"><span style="font-size: 10px;">{{$user->email}}</span></div>
                    <br>
                @endforeach
                <hr>
            @endforeach
        @endforeach
    </div>
@endsection

@section('script')

@endsection