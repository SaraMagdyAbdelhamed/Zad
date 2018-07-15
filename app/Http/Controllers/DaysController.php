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
        //Our YYYY-MM-DD date string.
       $date = $request['start_date'];
 
        //Convert the date string into a unix timestamp.
        $unixTimestamp = strtotime($date);
 
        //Get the day of the week using PHP's date function.
        $dayOfWeek = date("l", $unixTimestamp);
 

        $sessions=round(30/$request['sessions'],0, PHP_ROUND_HALF_UP);
        $days=count($request['days']);
        foreach($request['days'] as $key=>$day)
        {
            $days_array[]=$key;
        }
         $j=0;
        for($i=$sessions;$i>0;$i--)
        {
            if($j == ($days))
            {
                $j=0;
            }
            $total_session[]=$days_array[$j];
            $j++;
        }
        // $data['sessions']=$total_session;
        //  dd( $dayOfWeek);
        return view('sessions' , $data);
    }
}
