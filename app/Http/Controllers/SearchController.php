<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Http\Requests;
use App\Vehicule;
use Illuminate\Http\Request;

class SearchController extends Controller
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

    public function displaySearch()
    {
        return view('search');
    }

    public function search(Requests\AddVehiculeRequest $request)
    {
        $type = $request->input('type');
        switch($type)
        {
            case 'agence' :

                break;
            case 'vehicule' :

                break;
        }
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
