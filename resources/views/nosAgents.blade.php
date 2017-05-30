@extends("default")
@section('title', "Nos agents")

@section("content")
    <div class="container">
        <div class="title">
            {{ Html::image('images/nosAgent.png') }}
            <h1>NOS AGENTS</h1>
        </div>

        <div class="nosAgent">
            @foreach ($agents as $agent)
                <div class="monAgent">

                    <p>Nom : {{$agent->name}}</p>
                    <p>Prénom : {{$agent->firstname}}</p>
                    <p>Téléphone : {{$agent->phone}}</p>
                    <p>Mobile : {{$agent->mobile}}</p>
                    <p>Fax : {{$agent->fax}}</p>
                    <p>Email : {{$agent->email}}</p>
                    <div class="form-group">
                        {!! Form::label('title', 'Admin ') !!}
                        @if($agent->admin)
                            {!! Form::checkbox ('admin', 1, ['class' =>'form-control']) !!}
                        @endif
                        @if(!$agent->admin)
                            {!! Form::checkbox ('admin', 0, ['class' =>'form-control']) !!}
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>


@endsection