<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Day;
class DaysController extends Controller
{
    public function index()
    {
    	$data['days']=Day::all();
    	// dd($data);
    	return view('welcome',$data);
    }

    public function session(Request $request)
    {
       
       $start_date = $request['start_date'];
        $unixTimestamp = strtotime($start_date);
        $startDayOfWeek = date("l", $unixTimestamp);
        $start_day_id=Day::where('day',strtolower($startDayOfWeek))->first();
        $data['total_days_in_weeks']=self::calculate_sessions($request , $start_day_id->id , $start_date);
        
        // dd($data);
        return view('sessions' , $data);
    }

    public function calculate_sessions($request ,  $start_day_id , $start_date)
    {
        $sessions=$request['sessions'];
        $number_of_chapters_in_one_session=round(30/$request['sessions'],0, PHP_ROUND_HALF_UP);
        $days=count($request['days']);
        $chapters=30;
        foreach($request['days'] as $key=>$day)
        {
            $days_array[]=$key;
        }
         $j=0;
         if($days_array[0] >= $start_day_id)
         {
             $count = $days_array[0]-$start_day_id;
         }
         else
         {
             $count=7 - ($start_day_id - $days_array[0]);
         }
        //  $count=0;
        for($i=$sessions;$i>0;$i--)
        {
            if($j == ($days))
            {
                $j=0;
                $count +=7;
            }
            $total_session_dates['day_name']=(Day::find($days_array[$j]))->day;
            // $days_added_in_week=($start_day_id-$days_array[$j]);
            // if($days_added_in_week < 0)
            // {
            //     $days_added_in_week *= -1;
                
            // }
            if($i==$sessions)
            {
                $added_days=$count;
            }
            else
            {
                $added_days=$count+$days_array[$j]-$days_array[0];
            }
            if($number_of_chapters_in_one_session < $chapters)
            {
                $total_session_dates['number_of_chapters'] = $number_of_chapters_in_one_session;
                $chapters -= $number_of_chapters_in_one_session;
            }
            else
            {
                $total_session_dates['number_of_chapters'] = $chapters;

            }
            $total_session_dates['day_date']=date('Y-m-d', strtotime($start_date. ' + '.$added_days .'days'));
            $total_sessions[]=$total_session_dates;
            $j++;
        }

        return $total_sessions;
    }
}
