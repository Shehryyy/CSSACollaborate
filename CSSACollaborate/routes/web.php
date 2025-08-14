<?php

use Illuminate\Support\Facades\Route;

Route::get('/signUp', function () {
    return view('signup');
})->name('signup.form');

Route::post('/signUp/verify', function () {
    return view('signupVerify');
})->name('signUp.verify');

