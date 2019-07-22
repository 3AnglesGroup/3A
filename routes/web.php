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

Route::get('/', function () {return view('welcome');});
Route::get('/index', function () {return view('index');});
Route::get('/habilidades', function () {return view('habilidades');});
Route::get('/proyecto', function () {return view('proyecto');});
Route::get('/trabajo', function () {return view('trabajo');});
Route::get('/contacto', function () {return view('contacto');});
