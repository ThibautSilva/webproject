@extends("default")
@section('title', "Contacter le support")

@section("contactSupport")
    <div class="container">
        <div class="formAddVehicle">
            <div class="titleForm">
                <h1>Contacter le support</h1>
            </div>
            <div class="form-group">

                {!! Form::label('title', 'Adresse E-mail *') !!}
                {!! Form::text ('email', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Objet *') !!}
                {!! Form::text ('objet', '', ['class' =>'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('title', 'Problème rencontré *') !!}
                {!! Form::textarea ('probleme', '', ['class' =>'form-control']) !!}

            </div>




            {!! Form::submit('Envoyer !', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>




@endsection