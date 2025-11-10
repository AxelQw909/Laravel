<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/products', [ProductController::class,'index'])
->name('products.index');

Route::get('/products/create', [ProductController::class,'create'])
->name('products.create');

Route::post('/products',[ProductController::class,'store'])
->name('products.store');

Route::get('/products/{product}',[ProductController::class,'show'] )
->name('products.show');

Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');

Route::put('/products/{product}',[ProductController::class,'update'])->name('products.update');

Route::delete('/products/{product}',[ProductController::class,'destroy'])
->name('products.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/second', [TestController::class, "second"])->name('second');

Route::get('/third', ) ->name('third');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home', [MainController::class, 'showIndex']) ->name('home');
Route::get('/array', [MainController::class, 'showArray']) ->name('array');

/*---------------------крут операции----------------------*/

require __DIR__.'/auth.php';
