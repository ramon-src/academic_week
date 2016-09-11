@inject('events', 'AcademicDirectory\Domains\Services\EventsService')
<div class="panel-heading">
    <span id="widget-event-title">Eventos</span>
</div>
<div class="panel-body">
    <div id="widget-events-content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @forelse($events->getEventList(auth()->user()->person->instituitionIdIfHasLink()) as $event)
                    <div class="col-lg-4 text-center">
                        <div class="event-div">
                            <div class="event-title-div">
                        <span class="event-title">
                            {{$event->name}}
                        </span>
                            </div>
                            <a href="{{route('event.schedule', ['name'=>str_slug($event->name), 'id' => $event->id])}}"
                               class="btn btn-xs btn-primary btn-schedule"><i class="fa fa-calendar"></i>Programação</a>
                        </div>
                    </div>
                @empty
                    Não há eventos próximos
                @endforelse
            </div>
        </div>
    </div>
</div>