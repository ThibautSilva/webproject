@extends("default")
@section('title', "Recherche")

@section("recherche")

    <div class="container">
        <div class="title">
            {{ Html::image('images/search.png') }}
            <h1>RECHERCHER</h1>
        </div>
        <div class="search">
            {!! Form::open(['method' => 'post']) !!}
            <div class="formSearch">

                <div class="form-group">
                    <div class="critere">
                        {!! Form::label('title', 'Agence') !!}
                        {!! Form::select ('agence', [null=>'Toutes les agences'] + $agencesLabel, '', ['class' =>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="critere">
                        {!! Form::label('title', 'Statut') !!}
                        {!! Form::select ('statut', $statuts, '', ['class' =>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="critere">
                        {!! Form::label('title', 'Hauteur maximum') !!}
                        {{ Form::selectRange('hauteur', 1, 15, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="critere">
                        {!! Form::label('title', 'Largeur maximum') !!}
                        {{ Form::selectRange('largeur', 1, 15, ['class' => 'form-control']) }}
                    </div>
                </div>
                {!! Form::submit('Rechercher', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>

        {!! Form::close() !!}

        <div class="contentSearch">
            @extends("nosVehicules")
            @extends("agences")
        </div>
    </div>

@endsection