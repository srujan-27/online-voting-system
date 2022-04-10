<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;
use Illuminate\Support\Facades\Hash;
use App\Models\Timer;


class voterLoginCompleteController extends Controller
{
    public function show(Request $request)
    {
        $userid = $request->userid;
        $userpass = $request->password;


        $idcheck = Voter::where('voterid', '=', $request->input('userid'))->first();

        $pass = Voter::where('voterid', $userid )->value('password');

        

      if ($idcheck === null) {

        

        return redirect('/voterLogin')
                   ->withErrors("Voter id does not exist");

        }

        else{
            


            if(Hash::check($userpass,$pass)){

                $timer = Timer::first();
                $time = $timer->launch_date;



                $request->session()->put('voterid', $idcheck);
                return view('panel.voterPanel',compact('time'));
             }
             else{
                return redirect('/voterLogin')
                   ->withErrors("Password is not macthing");
             }
        }


    }
}
