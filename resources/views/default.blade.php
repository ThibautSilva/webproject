<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Socopec</title>
    <link rel="stylesheet" type="text/css" href="{{url('/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">

</head>
<body>
<div class="container-fluid">
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
                    <span class="glyphicon glyphicon-user"></span>
                </div>
            </div>

        </div>
    </div>
    <div class="header_bottom">
        <nav id="menu">
            <div class="container">
                <div class="col-md-12">
                <ul id="menu_principal">
                    <li>Ajouter une agence</li>
                    <li>Rechercher</li>
                    <li>Nos agents</li>
                    <li>Nos véhicules</li>
                </ul>
                </div>
            </div>
        </nav>

    </div>
</div>


</body>
</html>