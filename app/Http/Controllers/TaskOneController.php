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
            'github_file_url'=>'https://github.com/yunus2001/HNG10_Task_one/blob/master/app/Http/Controllers/TaskOneController.php',
            'github_repo_url'=>'https://github.com/yunus2001/HNG10_Task_one',
        ];
        return response()->json($taskOne) ;
    }
}
