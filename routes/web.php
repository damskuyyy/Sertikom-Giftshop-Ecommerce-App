<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('front.beranda');
        
 });


//Route::group(['middleware' => ['auth', 'checkActive', 'role:admin|manager|staff']], function(){

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::get('/dashboard', function(){
    return view('admin.dashboard');
    
});

Auth::routes();

// Route::get('/user', [UserController::class, 'index']);
Route::prefix('admin')->group(function () {
    Route::resource('user', UserController::class);
});
    



