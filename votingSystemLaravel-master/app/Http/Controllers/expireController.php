<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timer;

class expireController extends Controller
{
    public function show()
    {
        $timer = Timer::first();
        $time = $timer->launch_date;

        return view('expire',compact('time'));
    }
}
