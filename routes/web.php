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
    $data = DB::select('SELECT * FROM menus');

    return View::make('welcome')
        ->with( 'menus', $data );
});
//Menus
Route::resource('menu', 'MenuControlador');
//Route::post('/comida/reservar', 'MenuControlador@reservar')->name('reservar');
Route::get('/busqueda','ComidasController@ver')->name('busqueda');

//Eventos
Route::resource('evento', 'EventoController');

Auth::routes();

//Autentificacion con facebook
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

//Dashboard
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/misMenus','HomeController@misMenus')->name('misMenus');
Route::get('/home/misEventosReservados','HomeController@misEventosReservados')->name('misEventosReservados');
Route::get('/home/misEventosPublicados','HomeController@misEventosPublicados')->name('misEventosPublicados');