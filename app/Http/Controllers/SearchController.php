<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Http\Requests;
use App\Status;
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
        $agences = Agence::all();
        $agencesLabel = array();
        foreach ($agences as $div)
        {
            $agencesLabel[] = $div->nom ;
        }
        $statuts = Status::all();
        $statusLabel = array();
        foreach ($statuts as $div)
        {
            $statusLabel[] = $div->name ;
        }
        return view('search', ['agencesLabel' => $agencesLabel, 'statuts' => $statusLabel, 'agences' => $agences, 'vehicules' => Vehicule::all(), 'selectedagence' => 0]);
    }

    public function search(Requests\SearchRequest $request)
    {
        $agenceid = $request->input('agence');
        if ($agenceid != 0) {
            $vehicules =Vehicule::where('agence_id', $agenceid)
                ->get();
        } else {
            $vehicules = Vehicule::all();
        }
        $agences = Agence::all();
        $agencesLabel = array();
        foreach ($agences as $div)
        {
            $agencesLabel[] = $div->nom ;
        }
        $statuts = Status::all();
        $statusLabel = array();
        foreach ($statuts as $div)
        {
            $statusLabel[] = $div->name ;
        }
        $selectedagence = $request->input('agence');
        return view('search', ['agencesLabel' => $agencesLabel, 'statuts' => $statusLabel, 'agences' => $agences, 'vehicules' => $vehicules, 'selectedagence' => $selectedagence]);
    }
}
