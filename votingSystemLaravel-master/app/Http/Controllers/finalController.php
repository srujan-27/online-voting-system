<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;

class finalController extends Controller
{
    public function show($email)
    {
       $name = Apply::where('email', $email )->value('name');

       //return $name;

       return view('final',compact('name','email')); 
       
    }

    public function delete($email)
    {
        $res=Apply::where('email',$email)->delete();
        return redirect()->back()->with('success', 'Successfully deleted '); 

    }
    
}
