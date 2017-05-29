@section("nosVehicules")
    @if(isset($voitures))
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
    @endif

@endsection