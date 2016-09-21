<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Events;

use Artesaos\Warehouse\AbstractCrudRepository;

class EventsRepository extends AbstractCrudRepository
{

    protected $modelClass = Event::class;

    public function getAllEventsByInstituitionId($id)
    {
        return $this->newQuery()->where("instituition_id", "=", $id)->get();
    }

    public function getAllActiveEventsByInstituitionId($id)
    {
        return $this->newQuery()->where("instituition_id", "=", $id)->where("active", "=", true)->get();
    }

    public function getAllActiveEvents()
    {
        return $this->newQuery()->where("active", "=", true)->get();
    }

    public function isUserSubscriberInEvent($event_id, $user_id)
    {
        return $this->newQuery()
            ->join('events_subscribers', 'events.id', '=', 'events_subscribers.event_id')
            ->where('events_subscribers.user_id', '=', $user_id)
            ->where('events_subscribers.event_id', '=', $event_id)
            ->select('events_subscribers.active')
            ->get();
    }
}