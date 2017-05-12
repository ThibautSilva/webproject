@extends("default")
@section('title', "Nos agences")

@section("content")
    <div class="container">
        <div class="title">
            {{ Html::image('images/home.png') }}
            <h1>NOS AGENCES</h1>
        </div>
        <div class="nosAgence">
            <div class="agence">
                <div class="divPhotoAgence">
                    {{ Html::image('images/agence.jpg', 'a picture', array('class' => 'photoAgence')) }}
                </div>
                <div class="titreAgence">Agence Lorraine</div>
                <div class="adresseAgence">testqzdqzdqzdqzdqzdqzdqzdqzdqzdqzdqzdqzdqzdqzdqzdqzd</div>
                <div class="divButtonVoir"><button class="buttonVoir">{{ Html::image('images/eye.png') }}Voir</button></div>
            </div>
            <div class="agence"></div>
            <div class="agence"></div>
            <div class="agence"></div>
        </div>




    </div>
    </div>


@endsection