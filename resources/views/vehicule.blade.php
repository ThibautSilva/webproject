@extends("default")
@section('title', "Vehicules")

@section("vehicule")


    <div class="container-fluid">
        <div class="resaVehicule">
            <div class="photoResaVehicule">
                {{ Html::image('images/voiture.png') }}
            </div>
            <div class="infoResaVehicule">
                <div class="formAddVehicle">
                    <h1>Citroen C3</h1>
                    <p>Année de production : 2003</p>
                    <p>Longueur : 2 m</p>
                    <p>Largeur : 2 m</p>
                    <p>Poid : 958 kg</p>
                    <p>Puissance : 90 CV</p>
                    <div class="form-group">

                        {!! Form::label('text', 'Date de départ *') !!}
                        {!! Form::date ('ddeb', '', ['class' =>'form-control']) !!}

                    </div>
                    <div class="form-group">

                        {!! Form::label('text', 'Date de retour *') !!}
                        {!! Form::date ('ddeb', '', ['class' =>'form-control']) !!}

                    </div>

                    <div class="form-group">

                        {!! Form::label('title', 'Statut') !!}
                        {!! Form::select ('agence', $statut, '', ['class' =>'form-control']) !!}

                    </div>

                    {!! Form::submit('Reserver !', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>

    </div>

@endsection