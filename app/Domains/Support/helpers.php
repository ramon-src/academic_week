<?php
use Carbon\Carbon;

if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        $dateparsed = Carbon::parse($date);
        return $dateparsed->format('d/m/Y');
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