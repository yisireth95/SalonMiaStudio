<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Makeup', function () {
    return view('Makeup');
})->name('Makeup');

Route::get('/Nails', function () {
    return view('Nails');
})->name('Nails');

Route::get('/Cabellos', function () {
    return view('Cabellos');
})->name('Cabellos');

Route::get('/Barberia', function () {
    return view('Barberia');
})->name('Barberia');
