<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

// Route::get('/signup', function () {
//     return view('signup');
// });

// Route::get('/signin', function () {
//     return view('signin');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
