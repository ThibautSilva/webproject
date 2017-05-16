@extends("default")
@section('title', "Nos agents")

@section("content")
    <div class="container">
        <div class="title">
            {{ Html::image('images/home.png') }}
            <h1>NOS AGENTS</h1>
        </div>
        <div class="nosAgents">
            @foreach ($agents as $agent)
                {{--affichage des agents--}}
            @endforeach
        </div>




    </div>
    </div>


@endsection