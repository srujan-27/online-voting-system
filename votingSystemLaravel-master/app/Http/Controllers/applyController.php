<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class applyController extends Controller
{
    public function show()
    {
        $title = Title::where('id', 1 )->value('title');
        return view('apply',compact('title'));
        
    }
}
