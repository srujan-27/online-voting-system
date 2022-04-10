<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\Commissioner;
use Illuminate\Support\Facades\Hash;

class commissionerSignUpCompleteController extends Controller
{
    public function show(Request $request)
    {
        $newMember = new Commissioner;

        

        $validator = Validator::make($request->all(), [

            'password' => ['required',  Password::min(8)],
            'password' => 'required|confirmed|min:8',
            
        ]);

        if ($validator->fails()) {
            return redirect('/commissionerSignUp')
                        ->withErrors($validator);
                        
        }


        $emailcheck = Commissioner::where('email', '=', $request->input('email'))->first();
      


        if ($emailcheck === null) 
        {
          
            $newMember->name = $request->name;
            $newMember->email = $request->email;
            $newMember->password = Hash::make($request->password);
            $newMember->save();
            return redirect('/commissionerSignUp')
               ->withErrors("Account is successfully created");
            
        }

        else{
            return redirect('/commissionerSignUp')
            ->withErrors("Email already used");
        }
        
    }
}
