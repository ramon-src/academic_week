<?php

namespace AcademicDirectory\Http\Controllers\Web;

use AcademicDirectory\Domains\Events\EventScheduleRepository;
use AcademicDirectory\Domains\Events\EventsRepository;
use AcademicDirectory\Domains\Lectures\LecturesRepository;
use AcademicDirectory\Domains\Users\LectureUserRolesRepository;
use AcademicDirectory\Domains\Users\UsersLectureRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ScheduleViewController extends Controller
{
    private $eventsRepository;
    private $eventScheduleRepository;

    public function __construct(EventsRepository $eventsRepository, EventScheduleRepository $eventScheduleRepository)
    {
        $this->eventsRepository = $eventsRepository;
        $this->eventScheduleRepository = $eventScheduleRepository;
    }

    /**
     * Show the event in website.
     * @param $event_id
     * @return $this
     */
    public function index($name, $id)
    {
        return view('web/events/event')
            ->with('event', $this->eventsRepository->findByID($id));
    }

    public function schedule_day($name, $event_schedule_id, $date)
    {
        $EventScheduleDay = $this->eventScheduleRepository->findByID($event_schedule_id);
        $array_is_subscriber = $this->eventsRepository->isUserSubscriberInEvent($EventScheduleDay->event_id, auth()->id());
        $is_pending = count($array_is_subscriber) ? false : true;
        return view('api/default_user/events/schedule_day')
            ->with('event_schedule', $EventScheduleDay)
            ->with('lectures', $this->eventScheduleRepository->getAllLectures($event_schedule_id))
            ->with('courses', $this->eventScheduleRepository->getAllCourses($event_schedule_id))
            ->with('is_pending', $is_pending);
    }

}
