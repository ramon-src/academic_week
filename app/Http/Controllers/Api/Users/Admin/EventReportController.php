<?php

namespace AcademicDirectory\Http\Controllers\Api\Users\Admin;

use AcademicDirectory\Domains\Events\EventScheduleRepository;
use AcademicDirectory\Domains\Events\EventsRepository;
use AcademicDirectory\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;

class EventReportController extends Controller
{
    private $eventsRepository;

    public function __construct(EventsRepository $eventsRepository)
    {
        $this->eventsRepository = $eventsRepository;
    }

    public function getReportUsersSubscribedInAllLecturesInEvent($id, EventScheduleRepository $eventScheduleRepository)
    {

        return view('api/admin/events/report')
            ->with('event', $this->eventsRepository->findByID($id));
    }
}