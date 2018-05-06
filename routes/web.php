<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = DB::select('SELECT * FROM comidas');

    return View::make('welcome')
        ->with( 'comidas', $data );
});
//Comidas
Route::resource('comida', 'ComidaControlador');
Route::post('/comida/reservar', 'ComidaControlador@reservar')->name('reservar');
Route::get('/busqueda','ComidasController@ver')->name('busqueda');

//Fechas
Route::resource('fecha', 'FechaController');

Auth::routes();

//Autentificacion
Route::get('/home', 'HomeController@index')->name('home');

//Autentificacion con facebook
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

