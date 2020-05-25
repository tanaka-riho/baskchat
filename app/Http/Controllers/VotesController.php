<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotesController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->vote($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->unvote($id);
        return back();
    }
}
