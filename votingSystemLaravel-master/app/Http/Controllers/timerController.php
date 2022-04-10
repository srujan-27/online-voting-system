<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timer;

class timerController extends Controller
{
    public function create(){
        return view('commissioner.newVote');
    }

    public function update(Request $request)
    {
        $timer_id ='1';
        $timer = Timer::findOrNew($timer_id);
        $timer->launch_date = $request->date_time;
        $timer->status = $request->timer_status;
        $timer->title = $request->title;
        $timer->save();
        return redirect('/create-timer')
        ->withErrors("Successfully added");

    }

    public function view(){
        $timer = Timer::first();
        $time = $timer->launch_date;
        return view('timer.view',compact('time'));
    }
}
