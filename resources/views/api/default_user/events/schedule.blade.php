@extends('api.dashboard')

@section('content')
    <section id="event-schedule-container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <h1>
                        {{$event->name}}
                    </h1>
                </div>
                {{$event->description}}

                <div class="page-header">
                    <h1>Programação
                        <small>De {{$event->minDateFormatted()}} à {{$event->maxDateFormatted()}}</small>
                    </h1>
                </div>
                <div class="row">
                    @foreach($event->schedule as $programation)
                        <div class="col-lg-2">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">
                                    {{getWeekDay($programation->date)}} ({{getDayAndMonth($programation->date)}})
                                </div>
                                <div class="panel-body">
                                    {{$programation->description}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection