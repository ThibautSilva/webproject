@extends("default")
@section('title', "Véhicule")

@section("ajoutVehicule")
    <div class="container">
        <div class="formAddVehicle">
            <h1>Ajouter un véhicule</h1>
            {!! Form::open(['method' => 'post']) !!}
            <div class="form-group">

                {!! Form::label('title', 'Marque / Modèle *') !!}
                {!! Form::text ('marque', '', ['class' =>'form-control']) !!}
                {!! $errors->first('marque', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Date de fabrication') !!}
                {!! Form::text ('date', '', ['class' =>'form-control']) !!}
                {!! $errors->first('date', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Puissance CV') !!}
                {!! Form::text ('puissanceCV', '', ['class' =>'form-control']) !!}
                {!! $errors->first('puissanceCV', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Hauteur') !!}
                {!! Form::text ('hauteur', '', ['class' =>'form-control']) !!}
                {!! $errors->first('hauteur', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Largeur') !!}
                {!! Form::text ('largeur', '', ['class' =>'form-control']) !!}
                {!! $errors->first('largeur', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Poid') !!}
                {!! Form::text ('poid', '', ['class' =>'form-control']) !!}
                {!! $errors->first('poid', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Photo du véhicule') !!}
                {!! Form::file ('photo', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Agence') !!}
                {!! Form::select ('agence', $agences, '', ['class' =>'form-control']) !!}

            </div>

            {!! Form::submit('envoyer') !!}

            {{--<button class="btn btn-primary">Envoyer</button>--}}
        </div>


        {!! Form::close() !!}


    </div>



@endsection