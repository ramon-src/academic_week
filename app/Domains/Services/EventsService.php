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
    protected $lecturesRepository;

    public function __construct($eventsRepository, $eventScheduleRepository, $lecturesRepository)
    {
        $this->eventsRepository = $eventsRepository;
        $this->eventScheduleRepository = $eventScheduleRepository;
        $this->lecturesRepository = $lecturesRepository;
    }

    public function getEventList($id)
    {
        if ($id) {
            return $this->eventsRepository->getAllActiveEventsByInstituitionId($id);
        } else {
            return $this->eventsRepository->getAllActiveEvents();
        }
    }
    
    public function countMaximumCapacityOfEvent($id){
        return $this->eventScheduleRepository->countMaximumCapacityOfEvent($id);
    }

    public function isUserSubscriberInEvent($id, $user_id)
    {
        return $this->eventsRepository->isUserSubscriberInEvent($id, $user_id);
    }

    public function getAllLecturesFromScheduleId($schedule_id)
    {
        return $this->lecturesRepository->getAllLecturesByScheduleIdAndType($schedule_id, 'Palestras');
    }

    public function getAllCoursesFromScheduleId($schedule_id)
    {
        return $this->lecturesRepository->getAllLecturesByScheduleIdAndType($schedule_id, 'Cursos');
    }

    public function getAllUsersParticipatsInLecture($lecture_id)
    {
        return $this->eventScheduleRepository->getAllUsersParticipatsInLecture($lecture_id);
    }
}