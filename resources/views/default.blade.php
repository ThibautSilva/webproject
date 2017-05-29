<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">
    <link rel="icon" href="{{ url('/images/logo.png')}}">

</head>
<body>
<div class="container-fluid container-fluid-no-padding">
    <div class="header">
            <div class="col-xs-4 col-sm-4">
                <div class="logo">
                    <a href="{{ url('/') }}">{{ Html::image('images/logo.png', 'a picture', array('class' => 'logoMobile')) }}</a>
                </div>



            </div>

            <div class="col-xs-4 col-sm-4">
                <div class="header_tittle">
                    <p>Socopec</p>
                </div>
            </div>
            @if (Auth::check())
                <div class="col-xs-4 col-sm-4">
                    <div class="deconnexion">
                        <a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off"></span><br>DECONNEXION</a>
                    </div>
                </div>
            @endif

    </div>
    <div class="header_bottom">
        {{--<nav id="menu">

                <div class="col-xs-12 col-md-12">
                <ul>
                    --}}{{--Ajouter return view('nomVue');--}}{{--
                    <li><a href="{{ url('agence/add') }}" class="btn" data-wipe="Ajouter une agence">Ajouter une agence</a></li>
                    <li><a href="{{ url('search') }}" class="btn" data-wipe="Rechercher">Rechercher</a></li>
                    --}}{{--<li><a href="{{ url('agent/list') }}" class="btn" data-wipe="Nos agents">Nos agents</a></li>
                    <li><a href="{{ url('/vehicule/add') }}" class="btn" data-wipe="Ajouter un véhicule">Ajouter un
                            véhicule</a></li>--}}{{--
                </ul>
                </div>



        </nav>--}}

        <header>

            <a href="#" id="logo"></a>

            <nav>

                <a href="#" id="menu-icon"></a>

                <ul>

                    <li><a href="{{ url('agence/add') }}">Ajouter une agence</a></li>
                    <li><a href="{{ url('search') }}">Rechercher</a></li>
                    <li><a href="{{ url('agent/list') }}">Nos agents</a></li>
                    <li><a href="{{ url('/vehicule/add') }}">Ajouter un véhicule</a></li>
                    <li><a href="{{ url('/support') }}">Contacter le support</a></li>
                    <li class="decoMobile"><a href="{{ url('/logout') }}">Déconnexion</a></li>

                </ul>

            </nav>

        </header>

    </div>
</div>

@yield('content')

@yield('connect')

@yield('register')

@yield('agence')

@yield('ajoutVehicule')

@yield('addAgence')

@yield('vehicule')

@yield('contactSupport')

</body>
</html>