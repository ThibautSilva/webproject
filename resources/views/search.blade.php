@extends("default")
@section('title', "recherche")

@section("recherche")


    <div class="container">
        <div class="search">
            {!! Form::open(['method' => 'post']) !!}
            <div class="form-group">

                {!! Form::label('title', 'Nom ') !!}
                {!! Form::text ('nom', '', ['class' =>'form-control']) !!}
                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}

                {!! Form::label('title', 'Agence') !!}
                {!! Form::select ('agence', $agences, '', ['class' =>'form-control']) !!}

            </div>
            {!! Form::submit('Rechercher', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <div class="contentSearch">

            {{--@extends("vehicules")--}}
        </div>
    </div>

@endsection


vehicule :
Agence :

model
