<?php

namespace App\Http\Controllers;

use App\Team;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $teams;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->teams = Team::where('user_id', $request->user()->id)->get();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if( $this->teams->count() == 0 ) {
            return redirect('create');

        }
        return view('home', [
            'teams' => $this->teams,
        ]);
    }

    public function create()
    {
        return view('create', [ 'has_teams' => $this->teams->count() ]);
    }
}
