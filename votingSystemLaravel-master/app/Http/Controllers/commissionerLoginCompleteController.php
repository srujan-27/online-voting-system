<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commissioner;
use Illuminate\Support\Facades\Hash;

class commissionerLoginCompleteController extends Controller
{
    public function show(Request $request)
    {
        $userid = $request->email;
        $userpass = $request->pass;

        $idcheck = Commissioner::where('email', '=', $request->input('email'))->first();

        $pass = Commissioner::where('email', $userid )->value('password');



        if ($idcheck === null) 
        {
            return redirect('/commissionerLogin')
            ->withErrors("Email does not exist");

        }

        else{
            
            if(Hash::check($userpass,$pass)){

                $request->session()->put('name', $idcheck);
                return view('panel.commissionerPanel');
             }
             else{
                return redirect('/commissionerLogin')
                   ->withErrors("Password is not macthing");
             }

        }


        //return view('panel.commissionerPanel');
    }
}
