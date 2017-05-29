@extends("default")
@section('title', "Nos agents")

@section("content")
    <div class="container">
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


                @foreach ($agents as $agent)
                <tr>
                    <td>{{$agent->id}}</td>
                    <td>{{$agent->name}}</td>
                    <td>{{$agent->firstname}}</td>
                    <td>{{$agent->phone}}</td>
                    <td>{{$agent->mobile}}</td>
                    <td>{{$agent->fax}}</td>
                    <td>{{$agent->email}}</td>
                    <td>{{$agent->password}}</td>
                    <td>
                        <div class="form-group">
                            {!! Form::checkbox ('admin', 1, ['class' =>'form-control']) !!}

                        </div>
                    </td>
                </tr>
                @endforeach
              {{--  <tr>
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
                </tr>--}}

            </table>
        </div>
    </div>


@endsection