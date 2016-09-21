<?php

namespace AcademicDirectory\Http\Controllers\Api;

use AcademicDirectory\Domains\Events\EventScheduleRepository;
use AcademicDirectory\Domains\Events\EventsRepository;
use AcademicDirectory\Domains\Lectures\LecturesRepository;
use AcademicDirectory\Domains\Users\UsersLecture;
use AcademicDirectory\Domains\Users\UsersLectureRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventScheduleController extends Controller
{
    private $eventsRepository;
    private $eventScheduleRepository;

    public function __construct(EventsRepository $eventsRepository, EventScheduleRepository $eventScheduleRepository)
    {
        $this->middleware('auth');
        $this->eventsRepository = $eventsRepository;
        $this->eventScheduleRepository = $eventScheduleRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('api/default_user/events/schedule')
            ->with('event', $this->eventsRepository->findByID($request->id));
    }

    public function schedule_day($name, $event_schedule_id, $date)
    {
        $EventScheduleDay = $this->eventScheduleRepository->findByID($event_schedule_id);

        return view('api/default_user/events/schedule_day')
            ->with('event_schedule', $EventScheduleDay)
            ->with('lectures', $this->eventScheduleRepository->getAllLectures($event_schedule_id))
            ->with('courses', $this->eventScheduleRepository->getAllCourses($event_schedule_id));
    }

    public function subscribe($event_schedule_id, $lecture_id, UsersLectureRepository $usersLectureRepository, LecturesRepository $lecturesRepository)
    {
        $Lecture = $lecturesRepository->findByID($lecture_id);
        $EventSchedule = $this->eventScheduleRepository->findByID($event_schedule_id);

        $LecturesSubscribed = $usersLectureRepository->getAllLecturesThatUserIsSubscriber($EventSchedule->event_id, Auth::id(), $EventSchedule->date);
        $conflicts = $this->getArrayOfConfirmsInTheSameHour($LecturesSubscribed, $Lecture);
        if (array_count_values($conflicts)) {
            return response()->json(['status' => 'conflict', 'conflict_ids' => $conflicts]);
        } else {
            dd();
            DB::beginTransaction();
            try {
                $usersLectureRepository->create(['user_id' => Auth::id(), 'lecture_id' => $lecture_id]);
                DB::commit();
                return response()->json(['status' => true, 'message' => '']);
            } catch (Exception $e) {
                DB::rollback();
                return response()->json(['status' => 'false', 'message' => '']);
            }
        }
    }

    public function lecturesSubscribed($event_schedule_id, UsersLectureRepository $usersLectureRepository)
    {
        $EventSchedule = $this->eventScheduleRepository->findByID($event_schedule_id);
        $LecturesSubscribed = $usersLectureRepository->getAllLecturesThatUserIsSubscriber($EventSchedule->event_id, Auth::id(), $EventSchedule->date);
        return response()->json(['status' => true, 'lectures_subscribed' => $LecturesSubscribed]);
    }

    private function getArrayOfConfirmsInTheSameHour($lectures, $lecture)
    {
        $i_hour = $lecture->init_hour;
        $e_hour = $lecture->end_hour;

        $conflictLectureIds = array();
        foreach ($lectures as $index => $lec) {
            /*
             ($i_hour < $lec->init_hour && $e_hour < $lec->end_hour)
             || ($i_hour > $lec->init_hour && $e_hour > $lec->end_hour)
             || ($i_hour == $lec->init_hour && $e_hour == $lec->end_hour)
             */
            if (($i_hour <= $lec->init_hour && $e_hour >= $lec->end_hour)
                || ($i_hour >= $lec->init_hour && $e_hour <= $lec->end_hour)

            ) {
                $conflictLectureIds[] = $lec->id;
            }
        }
        return $conflictLectureIds;
    }
}
