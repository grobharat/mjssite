<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Modules\Auth\Controllers\AuthController as auth;
//------------Website Module--------//
Route::get('/', function () {
    return view('website/pages/home');
});
Route::get('/page', function () {
    return view('website/pages/page');
});
Route::get('/products', function () {
    return view('website/pages/products');
});
Route::get('/portfolio', function () {
    return view('website/pages/test');
});

//------------auth Module--------//
//Open Routes
Route::get('register', [auth::class,'showRegistrationForm'])->name('registerview');
Route::post('register', [auth::class,'register'])->name('register');
Route::get('login', [auth::class,'loginview'])->name('loginview');
Route::post('login', [auth::class,'login'])->name('login');
Route::get('forgotpassword', [auth::class,'forgotpasswordview']);
Route::post('forgotpassword', [auth::class,'forgotpassword']);
Route::get('resetpassword', [auth::class,'resetpasswordview']);
Route::post('resetpassword', [auth::class,'resetpassword']);
