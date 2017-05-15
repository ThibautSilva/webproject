@extends("default")
@section('title', "Véhicule")

@section("ajoutVehicule")
    <div class="container">
        <div class="formAddVehicle">
            <h1>Ajouter un véhicule</h1>
            {!! Form::open(['method' => 'post']) !!}
            <div class="form-group">

                {!! Form::label('title', 'Marque / Modèle') !!}
                {!! Form::text ('marque', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Date de fabrication') !!}
                {!! Form::text ('date', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Puissance CV') !!}
                {!! Form::text ('puissanceCV', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Hauteur') !!}
                {!! Form::text ('hauteur', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Largeur') !!}
                {!! Form::text ('largeur', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Poid') !!}
                {!! Form::text ('poid', '', ['class' =>'form-control']) !!}

            </div>

           {{-- <div class="form-group">

                {!! Form::label('title', 'Agence') !!}
                {!! Form::select ('agence', array('Nancy' => 'Nancy', 'Metz' => 'Metz'), '', ['class' =>'form-control']) !!}

            </div>
--}}
            <button class="btn btn-primary">Envoyer</button>
        </div>


        {!! Form::close() !!}


    </div>



@endsection