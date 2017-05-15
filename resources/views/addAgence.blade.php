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

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Adresse *') !!}
                {!! Form::text ('adresse', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Téléphone *') !!}
                {!! Form::text ('telephone', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Fax') !!}
                {!! Form::text ('fax', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Photo de l\'agence') !!}
                {!! Form::file ('photo', '', ['class' =>'form-control']) !!}

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