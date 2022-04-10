<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

class voteController extends Controller
{
    public function show()
    {
        $products =   Master::orderBy('id','asc')->paginate(5);
        return view('vote',compact('products'));
    }
}
