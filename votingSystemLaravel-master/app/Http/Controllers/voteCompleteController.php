<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

class voteCompleteController extends Controller
{
    public function show(Request $request)
    {
        $email = $request->input('html');

        $previous = Master::where("candidateMail", $email)->value('totalVote');

        $voteCount = $previous+1;
        
        $Update = Master::where("candidateMail", $email)->update(["totalVote" => $voteCount]);

        return back()->with('message', 'Thanks for your vote');
        
        
    }
}
