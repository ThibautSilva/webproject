<?php

namespace App\Http\Controllers;

use App\User;

class AgentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = User::all();
        return view('nosAgents')->with("agents", $agents);
    }

    public function showAgent($id)
    {
        return view('agent', ['agent' => User::findOrFail($id)]);
    }
}
