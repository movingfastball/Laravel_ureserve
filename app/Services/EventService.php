<?php

namespace App\Services;

use Illuminate\Support\Facades\DB; //クエリビルダ
use Carbon\Carbon;

class EventService
{

    public static function checkEventDuplication($eventDate, $startTime, $endTime)
    {
        return DB::table('events') 
        ->whereDate('start_date', $eventDate) // 日にち 
        ->whereTime('end_date' ,'>',$startTime) 
        ->whereTime('start_date', '<',$endTime) 
        ->exists(); // 存在確認 
        return $check;
    }

    public static function joinDateAndTime($date, $time)
    {
        $join = $date . " " . $time;
        return Carbon::createFromFormat('Y-m-d H:i', $join);
    }

}