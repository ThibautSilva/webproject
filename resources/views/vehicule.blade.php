@extends("default")
@section('title', "Vehicules")

@section("vehicule")


    <div class="container-fluid">
        <div class="resaVehicule">
            <div class="photoResaVehicule">
                {{ Html::image('images/voiture.png') }}
            </div>
            <div class="infoResaVehicule">
                <div class="editVehicule">
                    <a href="{{ url('/vehicule/delete/'. $vehicule->id) }}"><span class="glyphicon glyphicon-remove"></span></a>
                    <div id="edit"><a><span class="glyphicon glyphicon-edit"></span></a></div>
                </div>
                <div class="formAddVehicle" id="formReserver">

                    {!! Form::open(['method' => 'post', 'files'=>true]) !!}

                    <h1>{{$vehicule->modele}}</h1>
                    <p>Année de production : {{$vehicule->datefabrication}}</p>
                    <p>Hauteur : {{$vehicule->hauteur}} M</p>
                    <p>Largeur : {{$vehicule->largeur}} M</p>
                    <p>Poids : {{$vehicule->poids}} Kg</p>
                    <p>Puissance : {{$vehicule->puissance}} CV</p>
                    <div class="form-group">

                        {!! Form::label('text', 'Date de départ * :') !!}
                        {!! Form::date ('debutloc', '', ['class' =>'form-control']) !!}

                    </div>
                    <div class="form-group">

                        {!! Form::label('text', 'Date de retour * :') !!}
                        {!! Form::date ('finloc', '', ['class' =>'form-control']) !!}

                    </div>

                    <div class="form-group">

                            {!! Form::label('title', 'Statut  *:') !!}
                        <div class="alignSpan">
                            {!! Form::select ('statut', $statut, '', ['class' =>'form-control']) !!}
                            <span class="glyphicon glyphicon-plus" id="spanPad"></span>
                        </div>
                    </div>

                    {!! Form::submit('Reserver !', ['class' => 'btn btn-primary']) !!}
                </div>

                <div class="formAddVehicle" id="formEdit">

                    {!! Form::open(['method' => 'put', 'action' => array('VehiculeController@edit', $vehicule->id), 'files'=>true]) !!}


                    {{ Form::hidden('idvoiture', $vehicule->id) }}

                    <div class="form-group">

                        {!! Form::label('text', 'Marque / Modèle :') !!}
                        {!! Form::text ('modele', $vehicule->modele, ['class' =>'form-control']) !!}

                    </div>
                    <div class="form-group">

                        {!! Form::label('text', 'Date de fabrication :') !!}
                        {!! Form::date ('datefabrication', $vehicule->datefabrication, ['class' =>'form-control']) !!}

                    </div>
                    <div class="form-group">

                        {!! Form::label('text', 'Hauteur :') !!}
                        {!! Form::text ('hauteur', $vehicule->hauteur, ['class' =>'form-control']) !!}

                    </div>
                    <div class="form-group">

                        {!! Form::label('text', 'Largueur :') !!}
                        {!! Form::text ('largeur', $vehicule->largeur, ['class' =>'form-control']) !!}

                    </div>
                    <div class="form-group">

                        {!! Form::label('text', 'Poids :') !!}
                        {!! Form::text ('poids', $vehicule->poids, ['class' =>'form-control']) !!}

                    </div>
                    <div class="form-group">

                        {!! Form::label('text', 'Puissance :') !!}
                        {!! Form::text ('puissance', $vehicule->puissance, ['class' =>'form-control']) !!}

                    </div>


                    {!! Form::submit('Modifier !', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        </div>

    </div>

@endsection