@extends("default")
@section('title', "Vehicules")

@section("vehicule")


    <div class="container-fluid">
        <div class="resaVehicule">
            <div class="photoResaVehicule">
                {{ Html::image('images/voiture.png') }}
            </div>
            <div class="infoResaVehicule">
                <h1>Citroen C3</h1>
                <p>Année de production : 2003</p>
                <p>longueur : 2 m</p>
                <p>Largeur : 2 m</p>
                <p>Poid : 958 kg</p>
                <p>Puissance : 90 CV</p>
            </div>
        </div>

    </div>

@endsection