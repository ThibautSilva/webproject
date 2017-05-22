<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Http\Requests;
use App\Vehicule;
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
        return view('agence', ['agence' => Agence::findOrFail($id), 'vehicules' => Vehicule::all(), 'actualAgency' => $id]);
    }

    public function addAgencyInfos()
    {
        return view('addAgence');
    }

    public function addAgencyPost(Requests\AddAgencyRequest $request)
    {
        $agency = new Agence;
        $agency->nom = $request->input('nom');
        $agency->adresse = $request->input('adresse');
        $agency->telephone = $request->input('telephone');
        $agency->fax = $request->input('fax');
        $agency->save();
        return view('agence', ['agence' => Agence::findOrFail($agency->id), 'vehicules' => Vehicule::all()]);
    }
}
