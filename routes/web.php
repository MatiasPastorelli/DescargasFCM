<?php

use Illuminate\Support\Facades\Route;

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


if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}

Route::get('/contacto', function () {
    return view('presentacion.contacto');
});

Route::get('/', 'PresentacionController@index');