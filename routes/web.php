<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/home', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class,'home'])->name('home');
