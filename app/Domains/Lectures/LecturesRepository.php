<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Lectures;

use Artesaos\Warehouse\AbstractCrudRepository;
use Illuminate\Support\Facades\DB;
class LecturesRepository extends AbstractCrudRepository
{

    protected $modelClass = Lecture::class;

    public function limitOfSubscribers($lecture_id)
    {
        return $this->newQuery()->where("id", "=", $lecture_id)->select(['max_people'])->get();
    }

    /**
     * SELECT l.*, COUNT(ul.user_id) as count_users
     * FROM lectures l
     * INNER JOIN event_schedule es
     * ON l.event_schedule_id = es.id
     * INNER JOIN users_lecture ul
     * ON l.id = ul.lecture_id
     * WHERE es.event_id = 1
     * AND es.date = '2016-10-04'
     * GROUP BY l.id
     * HAVING
     * COUNT(ul.user_id) =  l.max_people
     * @param $event_id
     * @param $date
     * @return mixed
     */
    public function getAllCrowdedLecturesFromEventAndDate($schedule_id){
        return $this->newQuery()
            ->join('event_schedule', 'lectures.event_schedule_id', '=', 'event_schedule.id')
            ->join('users_lecture', 'lectures.id', '=', 'users_lecture.lecture_id')
            ->where('event_schedule.id', '=', $schedule_id)
            ->select('lectures.*', DB::raw('COUNT(users_lecture.user_id) as user_subs'))
            ->groupBy('lectures.id')
            ->groupBy('users_lecture.user_id')
            ->groupBy('lectures.subject')
            ->havingRaw('COUNT(user_subs) = lectures.max_people')
            ->get();
    }

    /**
     * SELECT l.*, COUNT(ul.user_id) as count_users
     * FROM lectures l
     * INNER JOIN event_schedule es
     * ON l.event_schedule_id = es.id
     * LEFT JOIN users_lecture ul
     * ON l.id = ul.lecture_id
     * WHERE es.id = 1
     * GROUP BY l.id
     * @param $schedule_id
     * @param $type
     * @return mixed
     */
    public function getAllLecturesByScheduleIdAndType($schedule_id, $type)
    {
        return $this->newQuery()
            ->join('event_schedule', 'lectures.event_schedule_id', '=', 'event_schedule.id')
            ->leftJoin('users_lecture', 'lectures.id', '=', 'users_lecture.lecture_id')
            ->join('lectures_category', 'lectures_category.id', '=', 'lectures.lecture_category_id')
            ->where('lectures_category.name', '=', $type)
            ->where('event_schedule.id', '=', $schedule_id)
            ->select('lectures.*', 'lectures_category.name',DB::raw('COUNT(users_lecture.user_id) as user_subs'), DB::raw('DATE_FORMAT(lectures.init_hour,"%H:%i") as init_hour'), DB::raw('DATE_FORMAT(lectures.end_hour, "%H:%i") as end_hour'))
            ->groupBy('lectures.id')
            ->get();
    }



}