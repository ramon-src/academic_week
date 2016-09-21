<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 10/09/16
 * Time: 19:53
 */

namespace AcademicDirectory\Domains\Services;

class EventsService
{
    protected $eventsRepository;

    public function __construct($eventsRepository)
    {
        $this->eventsRepository = $eventsRepository;
    }

    public function getEventList($id)
    {
        if ($id) {
            return $this->eventsRepository->getAllActiveEventsByInstituitionId($id);
        }else {
            return $this->eventsRepository->getAllActiveEvents();
        }
    }

    public function isUserSubscriberInEvent($id){
        return $this->eventsRepository->isUserSubscriberInEvent($id);
    }
}