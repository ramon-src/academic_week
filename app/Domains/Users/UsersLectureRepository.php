<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Users;

use Artesaos\Warehouse\AbstractCrudRepository;

class UsersLectureRepository extends AbstractCrudRepository
{

    protected $modelClass = UsersLecture::class;

    public function getAllLecturesThatUserIsSubscriber($event_id, $user_id, $date)
    {
        return $this->newQuery()
            ->join('lectures', 'users_lecture.lecture_id', '=', 'lectures.id')
            ->join('event_schedule', 'lectures.event_schedule_id', '=', 'event_schedule.id')
            ->where('users_lecture.user_id', '=', $user_id)
            ->where('event_schedule.event_id', '=', $event_id)
            ->where('event_schedule.date', '=', "$date")
            ->select('lectures.*')
            ->get();
    }

}