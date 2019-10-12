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
    return view('welcome');
});

Route::get('/home/{nombre}', function ($nombre) {
    return view('home', ['nombre'=>$nombre]);
//    return "hola ".$nombre." como estas";
})->where('nombre', '[A-Za-z]+');
