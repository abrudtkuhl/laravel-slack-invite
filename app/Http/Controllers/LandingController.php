<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Team;

class LandingController extends Controller
{
    public function index($slug)
    {
        $team = Team::where('slug', $slug)->first();
        return view('landing', [
            'team' => $team,
        ]);
    }
}
