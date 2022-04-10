<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;

class acceptController extends Controller
{
    public function show()
    {
        $data =   Apply::orderBy('id','desc')->paginate(5);
        return view('accept',compact('data'));
    }
}
