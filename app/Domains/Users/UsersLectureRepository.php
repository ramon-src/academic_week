<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Users;

use Artesaos\Warehouse\AbstractCrudRepository;
use Illuminate\Support\Facades\DB;

class UsersLectureRepository extends AbstractCrudRepository
{

    protected $modelClass = UsersLecture::class;

    public function getAllLecturesThatUserIsSubscriber($user_id, $schedule_id)
    {
        return $this->newQuery()
            ->join('lectures', 'users_lecture.lecture_id', '=', 'lectures.id')
            ->join('event_schedule', 'lectures.event_schedule_id', '=', 'event_schedule.id')
            ->where('users_lecture.user_id', '=', $user_id)
            ->where('event_schedule.id', '=', $schedule_id)
            ->select('lectures.*')
            ->get();
    }

    public function countUsersSubscribedInLecture($event_id, $lecture_id){
        return $this->newQuery()
            ->join('users','users_lecture.user_id', '=' , 'users.id')
            ->join('events_subscribers', 'users.id', '=', 'events_subscribers.user_id')
            ->where('users_lecture.lecture_id', '=', $lecture_id)
            ->where('events_subscribers.event_id', '=', $event_id)
            ->where('events_subscribers.active', '=', true)
            ->select(DB::raw('count(*) as user_count'))
            ->get();

    }

    public function findByUserAndLectureId($user_id, $lecture_id)
    {
        return $this->newQuery()->where('lecture_id', '=', $lecture_id)->where('user_id', '=', $user_id)->get();
    }

    public function unsubscribe($user_id, $lecture_id)
    {
        return $this->newQuery()->where('lecture_id', '=', $lecture_id)->where('user_id', '=', $user_id)->delete();
    }
}