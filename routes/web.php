<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestCase;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/second', [TestController::class, "second"])->name('second');

Route::get('/third', ) ->name('third');

