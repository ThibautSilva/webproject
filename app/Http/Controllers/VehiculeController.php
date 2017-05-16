<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Http\Requests;
use App\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
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
        $vehicules = Vehicule::all();
        return view('nosVehicules')->with("vehicules", $vehicules);
    }

    public function showVehicule($id)
    {
        return view('vehicule', ['vehicule' => Vehicule::findOrFail($id)]);
    }

    public function addVehicule()
    {
        return view('addVehicule', ['agences' => Agence::all()]); //pass id agence
    }
}
