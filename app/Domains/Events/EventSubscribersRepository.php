<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Events;

use Artesaos\Warehouse\AbstractCrudRepository;

class EventSubscribersRepository extends AbstractCrudRepository
{

    protected $modelClass = EventSubscribers::class;

    public function activeUserInEvent($user_id, $event_id)
    {
        return $this->newQuery()->updateOrCreate(['user_id' => $user_id, 'event_id' => $event_id, 'active' => true]);
    }
}