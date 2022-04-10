<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Apply;

class applyCompleteController extends Controller
{
    public function save($email)
    {

        $emailcheck = Apply::where('email', '=', $email)->first();

        if ($emailcheck === null) 
        {
        $newCandidate = new Apply;
        $name = User::where('email', $email )->value('name');

        $newCandidate->name = $name;
        $newCandidate->email = $email;
        $newCandidate->status = 0;

        $newCandidate->save();
        return redirect('/apply')
                      ->withErrors("You successfully applied");
        }
        else{
            return redirect('/apply')
            ->withErrors("You already applied");
        }

        
        
    }
}
