<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;
use App\Models\Master;
use Illuminate\Http\UploadedFile;

class finalCompleteController extends Controller
{

    public function fileUploadPost(Request $request,$email)

    {

        $request->validate([

            'file' => 'required|mimes:pdf,jpeg,png,jpg|max:2048',

        ]);

  

        $fileName = time().'.'.$request->file->extension();  

   

        $request->file->move(public_path('uploads'), $fileName);

        $newMember = new Master;

        $newMember->candidateName = Apply::where('email', $email )->value('name');

        $newMember->marka = $fileName;

        $status = Apply::where("email", $email)->update(['status' => 1]);
        
        $newMember->totalVote = 0;
        $newMember->candidateMail = $email;
        $newMember->save();


   

        return back()

            ->with('success','You have successfully upload file.')

            ->with('file',$fileName);

   

    }


    /*
    public function fileUploadPost(Request $request,$email)

    {

        $request->validate([

            'file' => 'required|mimes:pdf,xlx,csv,jpg,png|max:2048',

        ]);

  

        $fileName = time().'.'.$request->file->extension();  

   

        $request->file->move(public_path('uploads'), $fileName);

        $newMember = new Master;

        $newMember->candidateName = Apply::where('email', $email )->value('name');

        
        
        $newMember->totalVote = 0;
        $newMember->candidateMail = $email;
        $newMember->save();

   

        return back()

            ->with('success','You have successfully upload file.')

            ->with('file',$fileName);

   

    }
    */


}
