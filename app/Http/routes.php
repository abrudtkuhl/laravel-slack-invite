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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/start', 'HomeController@start');

Route::post('/team', 'TeamController@create');

Route::post('/invite', 'InviteController@index');
Route::get('/{slug}', 'LandingController@index');

/*Route::group(array('domain' => '{slug}.localhost:8000'), function()
{
    Route::get('landing/{slug}', 'LandingController@index');
});
*/
