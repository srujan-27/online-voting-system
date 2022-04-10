<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voterSignUpController extends Controller
{
    public function show()
    {
        return view('signup.voterSignUp');
    }
}
