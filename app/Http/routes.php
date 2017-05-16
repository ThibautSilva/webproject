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

Route::auth();

Route::get('/', 'AgenceController@index');

Route::get('/agence/list', 'AgenceController@index');

Route::get('/vehicule/list', 'VehiculeController@index');

//Route::get('/agent/list', 'AgentController@index');

Route::get('/vehicule/add', 'VehiculeController@addVehicule');

Route::get('/agence/add', 'AgenceController@addAgency');

//Route::get('/agent/add', 'AgentController@addAgent');

Route::get('/agence/{id}', 'AgenceController@showAgency');

Route::get('/vehicule/{id}', 'VehiculeController@showVehicule');

//Route::get('/agent/{id}', 'AgentController@showAgent');