@section("content")
    <div class="container">

        @if(isset($agences))
            <div class="title">
                {{ Html::image('images/home.png') }}
                <h1>NOS AGENCES</h1>
            </div>
            <div class="nosAgence">
                @foreach ($agences as $agence)
                    <div class="agence">
                        <div class="divPhotoAgence">
                            {{ Html::image($agence->photo_id, 'a picture', array('class' => 'photoAgence')) }}
                        </div>
                        <div class="titreAgence">{{$agence->nom}}</div>
                        <div class="adresseAgence">{{$agence->adresse}}</div>
                        <div class="divButtonVoir"><a href="{{ url('/agence/' . $agence->id) }}">
                                <button class="buttonVoir">{{ Html::image('images/eye.png') }}Voir</button>
                            </a></div>
                    </div>
                @endforeach
                @endif
            </div>


    </div>


@endsection