<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        // Jika sudah login, redirect ke dashboard
        return redirect('/home');
    } else {
        // Jika belum login, redirect ke halaman login
        return redirect('/login');
    }
});

Route::get('/home', function () {
    return view('pages.dashboard');
});

Route::resource('user', UserController::class);
Route::resource('product', ProductController::class);


// Route::get('/login', function () {
//     return view('pages.auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('pages.auth.register');
// })->name('register');
