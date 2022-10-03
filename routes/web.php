<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware' => 'auth'], function(){ 
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::view('profile', 'profile')->name('profile');
});
// Route::get('/index.php/dashboard', function () {
//     return "Chucs";
// });
require __DIR__.'/auth.php';