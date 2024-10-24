<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Redirect setelah logout
})->name('logout');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/', function(){
    return view('front.beranda');

});

Route::get('/dashboard', function(){
    return view('admin.dashboard');

});

Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');



