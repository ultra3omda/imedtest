<?php

use Illuminate\Support\Facades\Routes;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about');
});
