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
                        {!! Form::select ('agence', [0=>'Toutes les agences'] + $agencesLabel, $selectedagence, ['class' =>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="critere">
                        {!! Form::label('title', 'Statut') !!}
                        {!! Form::select ('statut', [0=>'Tout les statuts'] + $statuts, '', ['class' =>'form-control']) !!}
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
            @if(isset($vehicules))
                @foreach ($vehicules as $voiture)
                    <div class="vehiculesAgence">
                        <div class="photoVehicule">
                            {{--{{ Html::image('images/' . $voiture->urlphoto, 'voiture', array('class' => 'photoVoiture')) }}--}}
                            {{ Html::image('images/voiture2.png') }}
                        </div>
                        <div class="recapInfoVehicule">
                            <div class="infoVehicule">{{$voiture->modele}}</div>
                            <div class="infoVehicule">{{$voiture->datefabrication}}</div>
                            <div class="infoVehicule">{{$voiture->puissance}}</div>
                            <div class="infoVehicule">{{$voiture->hauteur}}</div>
                            <div class="infoVehicule">{{$voiture->largeur}}</div>
                            <div class="infoVehicule">{{$voiture->poids}}</div>
                        </div>
                        {{--<div class="divReserverVehicule">--}}
                        {{--<button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button>--}}
                        {{--</div>--}}
                        <div class="divReserverVehicule"><a href="{{ url('/vehicule/' . $voiture->id) }}">
                                <button class="btn btn-primary btnReserverVehicule">Choisir ce véhicule</button>
                            </a></div>
                    </div>

                @endforeach
            @endif
        </div>
    </div>

@endsection