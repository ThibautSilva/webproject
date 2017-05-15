<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Http\Requests;
use Illuminate\Http\Request;

class AgenceController extends Controller
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
        $agences = Agence::all();
        return view('nosAgences')->with("agences", $agences);
    }

    public function showAgency($id)
    {
        return view('agence', ['agence' => Agence::findOrFail($id)]);
    }
}
