@extends("default")
@section('title', "Agences")

@section("agence")


    <div class="container-fluid">
        <div class="infoAgence">
            <div class="monAgence">
                {{--{{ Html::image('images/' . $agence->urlphoto, 'agence', array('class' => 'photoPageAgence', 'onerror' => 'images/agence.jpg')) }}--}}
                {{ Html::image('images/agence2.jpg') }}

                <div class="agenceAdresse">
                    <h1>{{$agence->nom}}</h1>
                    <p>{{$agence->adresse}}</p>
                    <p>{{$agence->telephone}}</p>
                    <p>{{$agence->fax}}</p>
                </div>
            </div>

            <div class="mesVehiculesAgences">
                @foreach ($vehicules as $voiture)
                    <div class="vehiculesAgence">
                        <div class="photoVehicule">
                            {{--{{ Html::image('images/' . $voiture->urlphoto, 'voiture', array('class' => 'photoVoiture')) }}--}}
                            {{ Html::image('images/voiture2.png') }}
                        </div>
                        <div class="recapInfoVehicule">
                            <div class="infoVehicule">{{$voiture->modele}}</div>
                            <div class="infoVehicule">{{$voiture->datefabrication}}</div>
                            <div class="infoVehicule">{{$voiture->puissance}}</div>
                            <div class="infoVehicule">{{$voiture->hauteur}}</div>
                            <div class="infoVehicule">{{$voiture->largeur}}</div>
                            <div class="infoVehicule">{{$voiture->poids}}</div>
                        </div>
                        <div class="divReserverVehicule">
                            <button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button>
                        </div>
                        {{--<div class="divReserverVehicule"><a href="{{ url('/vehicule/' . $voiture->id) }}" ><button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button></a></div>--}}
                    </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection