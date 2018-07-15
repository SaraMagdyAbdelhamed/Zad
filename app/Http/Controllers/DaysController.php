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
        return view('sessions');
    }
}
