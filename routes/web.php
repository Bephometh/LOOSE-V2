<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loose');
});

Route::get('/aboutus', function(){
    return view('aboutus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
