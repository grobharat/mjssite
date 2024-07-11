<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website/pages/home');
});
Route::get('/page', function () {
    return view('website/pages/innerpage');
});
Route::get('/portfolio', function () {
    return view('website/pages/portfolio');
});
