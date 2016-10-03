<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 10/09/16
 * Time: 19:53
 */

namespace AcademicDirectory\Domains\Services;

use AcademicDirectory\Domains\Events\EventScheduleRepository;
use AcademicDirectory\Domains\Events\EventsRepository;

class EventsService
{
    protected $eventsRepository;
    protected $eventScheduleRepository;

    public function __construct($eventsRepository, $eventScheduleRepository)
    {
        $this->eventsRepository = $eventsRepository;
        $this->eventScheduleRepository = $eventScheduleRepository;
    }

    public function getEventList($id)
    {
        if ($id) {
            return $this->eventsRepository->getAllActiveEventsByInstituitionId($id);
        } else {
            return $this->eventsRepository->getAllActiveEvents();
        }
    }

    public function isUserSubscriberInEvent($id, $user_id)
    {
        return $this->eventsRepository->isUserSubscriberInEvent($id, $user_id);
    }

    public function getAllLecturesFromScheduleId($schedule_id)
    {
        return $this->eventScheduleRepository->getAllLectures($schedule_id);
    }

    public function getAllCoursesFromScheduleId($schedule_id)
    {
        return $this->eventScheduleRepository->getAllCourses($schedule_id);
    }
}