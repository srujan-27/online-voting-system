<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commissionerPanelController extends Controller
{
    public function show()
    {
        return view('panel.commissionerPanel');
    }
}
