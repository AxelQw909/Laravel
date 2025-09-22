<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestCase;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/second', [TestController::class, "second"])->name('second');

Route::get('/third', ) ->name('third');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home', [MainController::class, 'showIndex']) ->name('home');
Route::get('/array', [MainController::class, 'showArray']) ->name('array');