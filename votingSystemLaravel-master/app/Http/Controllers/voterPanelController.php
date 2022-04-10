<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voterPanelController extends Controller
{
    public function show()
    {
        return view('panel.voterPanel');
    }
}
