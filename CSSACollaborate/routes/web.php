<?php

use Illuminate\Support\Facades\Route;

Route::get('/signUp', function () {
    return view('signup');
})->name('signup.form');

Route::post('/signUp/verify', function () {
    return view('signupVerify');
})->name('signUp.verify');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/collaborate', function () {
    return view('collaborate');
})->name('collaborate');
