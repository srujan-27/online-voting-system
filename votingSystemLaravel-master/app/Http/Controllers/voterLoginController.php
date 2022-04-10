<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voterLoginController extends Controller
{
    public function show()
    {
        return view('login.voterLogin');
    }
}
