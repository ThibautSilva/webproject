<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Http\Requests;
use App\Status;
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
        $statut = Status::all();
        $statutLabel = array();
        foreach ($statut as $div)
        {
            $statutLabel[] = $div->name ;
        }


        return view('vehicule', ['vehicule' => Vehicule::findOrFail($id), 'statut' => $statutLabel]);
    }

    public function addVehiculeInfos()
    {
        $agences = Agence::all();
        $agencesLabel = array();
        foreach ($agences as $div)
        {
            $agencesLabel[] = $div->nom ;
        }


        return view('addVehicule', ['agences' => $agencesLabel]); //pass id agence
    }

    public function addVehiculePost(Requests\AddVehiculeRequest $request)
    {
        $vehicule = new Vehicule;
        $vehicule->modele = $request->input('marque');
        $destination = 'images/'; // your upload folder
        $image = $request->file('photo');
        if(isset($image)) {
            $filename = $image->getClientOriginalName(); // get the filename
            $image->move($destination, $filename); // move file to destination
            $photo = new Photo;
            $photo->urlphoto = $filename;
            $photo->save();
            $vehicule->photo_id = $photo->id;
        }
        $vehicule->save();
        return view('vehicule', ['vehicule' => Vehicule::findOrFail($vehicule->id)]);
    }
}
