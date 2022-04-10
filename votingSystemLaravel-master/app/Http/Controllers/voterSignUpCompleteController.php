<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\Voter;
use Illuminate\Support\Facades\Hash;

class voterSignUpCompleteController extends Controller
{
    public function check(Request $request)
    {

        $newMember = new Voter;

        

        $validator = Validator::make($request->all(), [

            'password' => ['required',  Password::min(8)],
            'userid' => 'required|string|max:255|min:5|',
            
        ]);

        if ($validator->fails()) {
            return redirect('/voterSignUp')
                        ->withErrors($validator);
                        
        }


        $emailcheck = Voter::where('email', '=', $request->input('email'))->first();
        $useridcheck = Voter::where('voterid', '=', $request->input('userid'))->first();


        if ($emailcheck === null) 
        {
            if ($useridcheck === null) 
            {
                $newMember->voterid = $request->userid;
                $newMember->name = $request->name;
                $newMember->email = $request->email;
                $newMember->password = Hash::make($request->password);
                $newMember->save();
                return redirect('/voterSignUp')
                   ->withErrors("Account is successfully created");
             }
             else{
                   return redirect('/voterSignUp')
                   ->withErrors("UserId already used");
                  }
        }

        else{
            return redirect('/voterSignUp')
            ->withErrors("Email already used");
        }
        

        
    }
}
