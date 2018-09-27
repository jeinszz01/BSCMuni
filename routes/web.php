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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');

Route::get('/cadena-de-valor', 'CadenaValorController@cadena')->name('cadena');


Route::resource('visions','VisionsController');

/*
Route::post('/cadenas', 'RegisterController@create')->name('cadenas');
Route::get('/users', 'RegisterController@registart')->name('usuarios');
Route::put();
Route::delete();

Route::resource('usuarios', 'UsuarioContro')
/*
<a href="{{route('usuarios')}}"></a>
<a href="{{url('/cadenas')}}"></a>
CRUD _> Create Reader Update Delete
*/
