<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">

</head>
<body>
<div class="container-fluid container-fluid-no-padding">
    <div class="header">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <img src="{{url('/images/logo.png')}}" alt="Image"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="header_tittle">
                    <p>Socopec</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="deconnexion">
                    <span class="glyphicon glyphicon-user"><br><a href="{{ url('/logout') }}">Déconnecter</a></span>
                </div>
            </div>

        </div>
    </div>
    <div class="header_bottom">
        <nav id="menu">
            <div class="container">
                <div class="col-md-12">
                <ul>
                    {{--Ajouter return view('nomVue');--}}
                    <li><a href="#" class="btn" data-wipe="Ajouter une agence">Ajouter une agence</a></li>
                    <li><a href="#" class="btn" data-wipe="Rechercher">Rechercher</a></li>
                    <li><a href="#" class="btn" data-wipe="Nos agents">Nos agents</a></li>
                    <li><a href="#" class="btn" data-wipe="Nos véhicules">Nos véhicules</a></li>
                </ul>
                </div>
            </div>
        </nav>

    </div>
</div>

@yield('content')

@yield('connect')

@yield('register')
</body>
</html>