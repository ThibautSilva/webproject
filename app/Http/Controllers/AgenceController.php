<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Http\Requests;
use App\Photo;
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
        $vehicules = Vehicule::where('agence_id', $id)
            ->get();
        return view('agence', ['agence' => Agence::findOrFail($id), 'vehicules' => $vehicules, 'actualAgency' => $id]);
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
        $destination = 'images/'; // your upload folder
        $image = $request->file('photo');
        if(isset($image)) {
            $filename = $image->getClientOriginalName(); // get the filename
            $image->move($destination, $filename); // move file to destination
            $photo = new Photo;
            $photo->urlphoto = $filename;
            $photo->save();
            $agency->photo_id = $photo->id;
        }
        $agency->save();
        $vehicules = Vehicule::where('agence_id', $agency->id)
            ->get();
        return view('agence', ['agence' => Agence::findOrFail($agency->id), 'vehicules' => $vehicules]);
    }
}
