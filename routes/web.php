<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{pathMatch}', function () {
    return view('welcome');
})->where('pathMatch', '.*');



// Route::get('/signup', function () {
//     return view('signup');
// });

// Route::get('/signin', function () {
//     return view('signin');
// });
