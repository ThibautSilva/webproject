@extends("default")
@section('title', "recherche")

@section("recherche")

    <div class="container">
        <div class="search">
            {!! Form::open(['method' => 'post']) !!}
            <div class="form-group">

                {!! Form::label('title', 'agence') !!}
                {!! Form::select ('agence', [null=>'Toutes les agences'] + $agencesLabel, '', ['class' =>'form-control']) !!}

                {!! Form::label('title', 'statut') !!}
                {!! Form::select ('statut', $statuts, '', ['class' =>'form-control']) !!}

                {!! Form::label('title', 'hauteur') !!}
                {{ Form::selectRange('hauteur', 2, 10, ['class' => 'field']) }}

                {!! Form::label('title', 'largeur') !!}
                {{ Form::selectRange('largeur', 1, 15, ['class' => 'field']) }}

{{--                {!! Form::label('title', 'poid') !!}
                {{ Form::selectRange('poid', 1000, $maxPoid, $selectedPoid, ['class' => 'field']) }}--}}

{{--                {!! Form::label('title', 'puissance') !!}
                {{ Form::selectRange('puissance', $minPuissance, $maxLPuissance, $selectedPuissance, ['class' => 'field']) }}--}}


              {{--  {!! Form::label('title', 'Agence') !!}
                {!! Form::select ('agence', $agences, '', ['class' =>'form-control']) !!}--}}

            </div>
            {!! Form::submit('Rechercher', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <div class="contentSearch">
            @extends("nosVehicules")
            @extends("agences")
        </div>
    </div>

@endsection