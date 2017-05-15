<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('default');
});

Route::get('/connection', function () {
    return view('auth/login');
});

Route::get('/agences', function () {
    return view('nosAgences');
});

Route::get('/agence', function () {
    return view('agence');
});

Route::get('/ajouterVehicule', function () {
    return view('addVehicle');

});

Route::get('/ajouterAgence', function () {
    return view('addAgence');
});

Route::auth();

Route::get('/home', 'HomeController@index');
