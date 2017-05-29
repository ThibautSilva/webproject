@extends("default")
@section('title', "Nos agents")

@section("content")
    <div class="container">
        {{ Html::image('images/home.png') }}
        <h1>NOS AGENTS</h1>

        <div class="nosAgent">
            @foreach ($agents as $agent)
                <div class="monAgent">

                    <p>Id : {{$agent->id}}</p>
                    <p>Nom : {{$agent->name}}</p>
                    <p>Prénom : {{$agent->firstname}}</p>
                    <p>Téléphone : {{$agent->phone}}</p>
                    <p>Mobile : {{$agent->mobile}}</p>
                    <p>Fax : {{$agent->fax}}</p>
                    <p>Email : {{$agent->email}}</p>
                    <div class="form-group">
                        {!! Form::label('title', 'Admin ') !!}
                        {!! Form::checkbox ('admin', 1, ['class' =>'form-control']) !!}

                    </div>
                </div>
            @endforeach

        </div>
    </div>


@endsection