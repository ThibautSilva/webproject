@extends("default")
@section('title', "Nos vehicules")

@section("content")
    <div class="container">
        <div class="title">
            {{ Html::image('images/home.png') }}
            <h1>NOS VEHICULES</h1>
        </div>
        <div class="nosVehicules">
            @foreach ($vehicules as $vehicule)
                {{--affichage des vehicules--}}
            @endforeach
        </div>




    </div>
    </div>


@endsection