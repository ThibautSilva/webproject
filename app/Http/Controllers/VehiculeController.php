<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Http\Requests;
use App\Photo;
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
        $vehicule->datefabrication = $request->input('date');
        $vehicule->hauteur = $request->input('hauteur');
        $vehicule->largeur = $request->input('largeur');
        $vehicule->poids = $request->input('poid');
        $vehicule->puissance = $request->input('puissanceCV');
        if ($request->input('agence') == 0){
            $vehicule->agence_id = 1;
        } else {
            $vehicule->agence_id = $request->input('agence');
        }
        $vehicule->statut_id = 2;
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
        $statut = Status::all();
        $statutLabel = array();
        foreach ($statut as $div)
        {
            $statutLabel[] = $div->name ;
        }
        return view('vehicule', ['vehicule' => Vehicule::findOrFail($vehicule->id), 'statut' => $statutLabel]);
    }

    public function edit(Requests\EditVehiculeRequest $request)
    {
        $vehicule = Vehicule::findOrFail($request->input('idvoiture'));
        $vehicule->modele = $request->input('modele');
        $vehicule->datefabrication = $request->input('datefabrication');
        $vehicule->hauteur = $request->input('hauteur');
        $vehicule->largeur = $request->input('largeur');
        $vehicule->poids = $request->input('poids');
        $vehicule->puissance = $request->input('puissance');
        $vehicule->save();
        $statut = Status::all();
        $statutLabel = array();
        foreach ($statut as $div)
        {
            $statutLabel[] = $div->name ;
        }
        return view('vehicule', ['vehicule' => Vehicule::findOrFail($vehicule->id), 'statut' => $statutLabel]);

       // return redirect('vehicule/'.$request->input('idvoiture'));
    }

    public function delete($id){
        $vehicule = Vehicule::findOrFail($id);
        $agence = $vehicule->agence_id;
        $vehicule->delete();
        $vehicules = Vehicule::where('agence_id', $id)
            ->get();
        return view('agence', ['agence' => Agence::findOrFail($agence), 'vehicules' => $vehicules, 'actualAgency' => $id]);
    }
}
