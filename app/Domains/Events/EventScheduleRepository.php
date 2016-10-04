<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Events;

use Artesaos\Warehouse\AbstractCrudRepository;
use Illuminate\Support\Facades\DB;

class EventScheduleRepository extends AbstractCrudRepository
{

    protected $modelClass = EventSchedule::class;

    public function getByEventIdAndDate($id, $date)
    {
        return $this->newQuery()->where("event_id", "=", $id)->where("date", "=", $date)->get();
    }

    public function getAllLectures($id)
    {
        return $this->newQuery()
            ->join('lectures', 'event_schedule.id', '=', 'lectures.event_schedule_id')
            ->join('lectures_category', 'lectures_category.id', '=', 'lectures.lecture_category_id')
            ->where('lectures_category.name', '=', 'Palestras')
            ->where('event_schedule.id', '=', $id)
            ->select('lectures.*', 'lectures_category.name', DB::raw('DATE_FORMAT(lectures.init_hour,"%H:%i") as init_hour'), DB::raw('DATE_FORMAT(lectures.end_hour, "%H:%i") as end_hour'))
            ->get();
    }

    public function getAllCourses($id)
    {
        return $this->newQuery()
            ->join('lectures', 'event_schedule.id', '=', 'lectures.event_schedule_id')
            ->join('lectures_category', 'lectures_category.id', '=', 'lectures.lecture_category_id')
            ->where('lectures_category.name', '=', 'Cursos')
            ->where('event_schedule.id', '=', $id)
            ->select('lectures.*', 'lectures_category.name', DB::raw('DATE_FORMAT(lectures.init_hour,"%H:%i") as init_hour'), DB::raw('DATE_FORMAT(lectures.end_hour, "%H:%i") as end_hour'))
            ->get();
    }


    public function getAllUsersParticipatsInLecture($id)
    {
        return $this->newQuery()
            ->join('lectures', 'event_schedule.id', '=', 'lectures.event_schedule_id')
            ->join('users_lecture', 'lectures.id', '=', 'users_lecture.lecture_id')
            ->join('users', 'users_lecture.user_id', '=', 'users.id')
            ->join('lectures_category', 'lectures_category.id', '=', 'lectures.lecture_category_id')
            ->where('lectures.id', '=', $id)
            ->select('users.name', 'users.rg', 'users.email', 'users.instituition_register')
            ->get();
    }

}