<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class titleCompleteController extends Controller
{
    public function show(Request $request)
    {
        $fill = $request->title;
        $title = Title::where("id", '1')->update(['title' => $fill]);

        return redirect('/title')
                   ->withErrors("Successfully added title");
        

    }
}
