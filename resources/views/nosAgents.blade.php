@extends("default")
@section('title', "Nos agents")

@section("content")
    <div class="container">
        <div class="formNosAgent">
            {{ Html::image('images/home.png') }} 
            <h1>NOS AGENTS</h1>



        <div class="nosAgents" id="rounded-corner">
            <table>
                <thead>
                <th class="hg">#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Mobile</th>
                <th>Fax</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th class="hd">Admin</th>
                </thead>


                {{--@foreach ($agents as $agent)
                @endforeach--}}
                <tr>
                    <td>1</td>
                    <td>FASSEY</td>
                    <td>Valentin</td>
                    <td>06.32.67.74.50</td>
                    <td>06.32.67.74.50</td>
                    <td>06.32.67.74.50</td>
                    <td>slachlol54@gmail.com</td>
                    <td>123456789</td>
                    <td>
                        <div class="form-group">
                            {!! Form::checkbox ('admin', 1, ['class' =>'form-control']) !!}

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>FASSEY</td>
                    <td>Valentin</td>
                    <td>06.32.67.74.50</td>
                    <td>06.32.67.74.50</td>
                    <td>06.32.67.74.50</td>
                    <td>slachlol54@gmail.com</td>
                    <td>123456789</td>
                    <td>
                        <div class="form-group">
                            {!! Form::checkbox ('admin', 1, ['class' =>'form-control']) !!}

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>FASSEY</td>
                    <td>Valentin</td>
                    <td>06.32.67.74.50</td>
                    <td>06.32.67.74.50</td>
                    <td>06.32.67.74.50</td>
                    <td>slachlol54@gmail.com</td>
                    <td>123456789</td>
                    <td>
                        <div class="form-group">
                            {!! Form::checkbox ('admin', 1, ['class' =>'form-control']) !!}

                        </div>
                    </td>
                </tr>

            </table>
        </div>


    </div>
    </div>


@endsection