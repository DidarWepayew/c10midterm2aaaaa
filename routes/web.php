<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts/app');
});

Route::get('/sportswears', function () {
    return view('sportswears');
});

Route::get('/sport_equipments', function () {
    return view('sport_equipments');
});

Route::get('/sport_nutritions', function () {
    return view('sport_nutritions');
});

Route::get('/sportswears', function () {
    return view('sportswears');
});
