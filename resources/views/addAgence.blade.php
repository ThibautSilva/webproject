@extends("default")
@section('title', "Agent")

@section("addAgence")

    <div class="container">
        <div class="formAddVehicle">
            <h1>Ajouter une agence</h1>
            {!! Form::open(['method' => 'post']) !!}
            <div class="form-group">

                {!! Form::label('title', 'Nom *') !!}
                {!! Form::text ('nom', '', ['class' =>'form-control']) !!}
                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Adresse *') !!}
                {!! Form::text ('adresse', '', ['class' =>'form-control']) !!}
                {!! $errors->first('adresse', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Téléphone *') !!}
                {!! Form::text ('telephone', '', ['class' =>'form-control']) !!}
                {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Fax') !!}
                {!! Form::text ('fax', '', ['class' =>'form-control']) !!}
                {!! $errors->first('fax', '<small class="help-block">:message</small>') !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Photo de l\'agence') !!}
                {!! Form::file ('photo', '', ['class' =>'form-control']) !!}
                {!! $errors->first('photo', '<small class="help-block">:message</small>') !!}

            </div>

            {{-- <div class="form-group">

                 {!! Form::label('title', 'Agence') !!}
                 {!! Form::select ('agence', array('Nancy' => 'Nancy', 'Metz' => 'Metz'), '', ['class' =>'form-control']) !!}

             </div>
 --}}
            {!! Form::submit('Envoyer !', ['class' => 'btn btn-primary']) !!}
{{--
            <button class="btn btn-primary">Envoyer</button>
--}}
        </div>


        {!! Form::close() !!}


    </div>

@endsection