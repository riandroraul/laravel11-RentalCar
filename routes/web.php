<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/regis', function () {
//     return view('regis', ['title' => 'Contact Page']);
// });




// Route::get('/{pathMatch}', function () {
//     return view('welcome');
// })->where('pathMatch', '.*');



// Route::get('/signup', function () {
//     return view('signup');
// });

// Route::get('/signin', function () {
//     return view('signin');
// });
