<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FromController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/contact','form.contact')->name('form.get');
Route::post('/formhandle', [FromController::class, 'formhandle'])->name('form.post');