<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Events;

use Artesaos\Warehouse\AbstractCrudRepository;

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
            ->select('lectures.*', 'lectures_category.name')
            ->get();
    }
    public function getAllCourses($id)
    {
        return $this->newQuery()
            ->join('lectures', 'event_schedule.id', '=', 'lectures.event_schedule_id')
            ->join('lectures_category', 'lectures_category.id', '=', 'lectures.lecture_category_id')
            ->where('lectures_category.name', '=', 'Cursos')
            ->where('event_schedule.id', '=', $id)
            ->select('lectures.*', 'lectures_category.name')
            ->get();
    }

}