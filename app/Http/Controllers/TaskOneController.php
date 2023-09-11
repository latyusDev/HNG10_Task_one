<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskOneController extends Controller
{
    public  function task()
    {
        $day = date("l"); 
        $utcTime = date("Y-m-d\TH:i:sp");
        $taskOne = [
            'slack_name'=>request('slack_name'),
            'current_day'=>$day,
            'utc_time'=>$utcTime,
            'track'=>request('track'),
            'status_code'=>200,
          
        ];
        return response()->json($taskOne) ;
    }
}
