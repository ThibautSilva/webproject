@extends("default")
@section('title', "Agences")

@section("agence")


    <div class="container">
        <div class="infoAgence">
            <div class="monAgence">
                {{ Html::image('images/agence2.jpg', 'a picture', array('class' => 'photoPageAgence')) }}
                <div class="agenceAdresse">
                    <h1>Agence de Moselle</h1>
                    <p>7 Avenue de Strasbourg</p>
                    <p>57000 - Metz</p>
                </div>
            </div>
            <div class="mesVehiculesAgences">
                <div class="vehiculesAgence">
                    <div class="photoVehicule">
                        {{ Html::image('images/voiture.png', 'voiture', array('class' => 'photoVoiture')) }}
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
                        {{ Html::image('images/voiture2.jpg', 'voiture', array('class' => 'photoVoiture')) }}
                    </div>
                    <div class="recapInfoVehicule">
                        <div class="infoVehicule">Citroen C3</div>
                        <div class="infoVehicule">2003</div>
                        <div class="infoVehicule">65 CV</div>
                        <div class="infoVehicule">3 m 20</div>
                        <div class="infoVehicule">1 m 99</div>
                        <div class="infoVehicule">870Kg</div>
                    </div>
                    <div class="divReserverVehicule"><button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button></div>
                </div>
            </div>

        </div>
    </div>

@endsection