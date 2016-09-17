<?php

namespace AcademicDirectory\Http\Controllers\Api;

use AcademicDirectory\Domains\Events\EventScheduleRepository;
use AcademicDirectory\Domains\Events\EventsRepository;
use Illuminate\Http\Request;

class EventScheduleController extends Controller
{
    private $eventsRepository;

    public function __construct(EventsRepository $eventsRepository)
    {
        $this->middleware('auth');
        $this->eventsRepository = $eventsRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('api/default_user/events/schedule')
            ->with('event', $this->eventsRepository->findByID($request->id));
    }

    public function schedule_day($name, $event_schedule_id, $date, EventScheduleRepository $eventScheduleRepository)
    {
        $EventScheduleDay = $eventScheduleRepository->findByID($event_schedule_id);

        return view('api/default_user/events/schedule_day')
            ->with('event_schedule', $EventScheduleDay)
            ->with('lectures', $eventScheduleRepository->getAllLectures($event_schedule_id))
            ->with('courses', $eventScheduleRepository->getAllCourses($event_schedule_id));
    }
}
