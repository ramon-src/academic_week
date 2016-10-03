<?php
use Carbon\Carbon;

use AcademicDirectory\Domains\Users\UsersLecture;
use AcademicDirectory\Domains\Users\LectureUserRole;

if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        $dateparsed = Carbon::parse($date);
        return $dateparsed->format('d/m/Y');
    }
}

if (!function_exists('formatDateWithSlash')) {
    function formatDateWithSlash($date)
    {
        $dateparsed = Carbon::parse($date);
        return $dateparsed->format('d-m-Y');
    }
}

if (!function_exists('getWeekDay')) {
    function getWeekDay($date)
    {
        setlocale(LC_ALL, 'pt_BR.UTF-8');
        $dateparsed = Carbon::parse($date);
        return $dateparsed->formatLocalized("%A");
    }
}

if (!function_exists('getDayAndMonth')) {
    function getDayAndMonth($date)
    {
        $dateparsed = Carbon::parse($date);
        return $dateparsed->format('d/m');
    }
}

if (!function_exists('setStringToTimeType')) {
    function setHourAndMinute($hour, $minute)
    {
        $time = Carbon::createFromTime($hour, $minute);
        return $time->toTimeString();
    }
}
if (!function_exists('deleteUsersLecturesByLectureId')) {
    function deleteUsersLecturesByLectureId($id)
    {
        $users_lectures = UsersLecture::where('lecture_id', '=', $id)->get();
        if (count($users_lectures)) {
            foreach ($users_lectures as $user_lecture) {
                $roles = LectureUserRole::where('user_lecture_id', '=', $user_lecture->id)->get();
                foreach ($roles as $role) {
                    $role->delete();
                }
                $user_lecture->delete();
            }
        }
    }
}