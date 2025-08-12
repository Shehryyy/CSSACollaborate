<?php

use Illuminate\Support\Facades\Route;

Route::get('/signUp', function () {
    return view('signUp'); 
})->name('signUp.form');

