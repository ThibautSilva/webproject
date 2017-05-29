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
                            <div class="infoVehicule">Citroen C3</div>
                            <div class="infoVehicule">2008</div>
                            <div class="infoVehicule">90 CV</div>
                            <div class="infoVehicule">3m 99</div>
                            <div class="infoVehicule">2m 20</div>
                            <div class="infoVehicule">900Kg</div>
                        </div>
                        <div class="divReserverVehicule"><button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button></div>
                        {{--<div class="divReserverVehicule"><a href="{{ url('/vehicule/' . $voiture->id) }}" ><button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button></a></div>--}}
                    </div>

                    <div class="vehiculesAgence">
                        <div class="photoVehicule">
                            {{--{{ Html::image('images/' . $voiture->urlphoto, 'voiture', array('class' => 'photoVoiture')) }}--}}
                            {{ Html::image('images/voiture2.png') }}
                        </div>
                        <div class="recapInfoVehicule">
                            <div class="infoVehicule">Citroen C3</div>
                            <div class="infoVehicule">2008</div>
                            <div class="infoVehicule">90 CV</div>
                            <div class="infoVehicule">3m 99</div>
                            <div class="infoVehicule">2m 20</div>
                            <div class="infoVehicule">900Kg</div>
                        </div>
                        <div class="divReserverVehicule"><button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button></div>
                    </div>

                    <div class="vehiculesAgence">
                        <div class="photoVehicule">
                            {{--{{ Html::image('images/' . $voiture->urlphoto, 'voiture', array('class' => 'photoVoiture')) }}--}}
                            {{ Html::image('images/voiture2.png') }}
                        </div>
                        <div class="recapInfoVehicule">
                            <div class="infoVehicule">Citroen C3</div>
                            <div class="infoVehicule">2008</div>
                            <div class="infoVehicule">90 CV</div>
                            <div class="infoVehicule">3m 99</div>
                            <div class="infoVehicule">2m 20</div>
                            <div class="infoVehicule">900Kg</div>
                        </div>
                        <div class="divReserverVehicule"><button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button></div>
                    </div>

                    <div class="vehiculesAgence">
                        <div class="photoVehicule">
                            {{--{{ Html::image('images/' . $voiture->urlphoto, 'voiture', array('class' => 'photoVoiture')) }}--}}
                            {{ Html::image('images/voiture2.png') }}
                        </div>
                        <div class="recapInfoVehicule">
                            <div class="infoVehicule">Citroen C3</div>
                            <div class="infoVehicule">2008</div>
                            <div class="infoVehicule">90 CV</div>
                            <div class="infoVehicule">3m 99</div>
                            <div class="infoVehicule">2m 20</div>
                            <div class="infoVehicule">900Kg</div>
                        </div>
                        <div class="divReserverVehicule"><button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button></div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

@endsection