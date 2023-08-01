<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
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
    return view('index');
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


Route::get('/product/{id}', [MainController::class, 'details'])->name('details');
Route::get('/sportswears', [ProductController::class,'index'])->name('sportswears');
Route::get('/reviews' , [ReviewController::class, 'reviews'])->name('reviews');
Route::get('/messages' , [ReviewController::class, 'allMessages'])->name('messages');
Route::post('/review/submit' , [ReviewController::class, 'reviews_submit'])->name('reviews_submit');

