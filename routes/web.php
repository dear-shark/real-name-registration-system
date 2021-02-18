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
    return view('v2.index');
});

//填寫表單
Route::prefix('/sign')->group(function () {
    Route::view('/google', 'v2.iframe.GoogleForm')->name('sign.google');
});

// Dashboard
Route::prefix('dash')->group(function () {
    Route::view('/', 'v2.dash.dashboard')->name('dash');
    Route::view('/login', 'v2.dash.login')->name('dash.login');
    // Route::get('/{id}', function ($event_id) {
    //     return 'Hello ' . $event_id;
    // });
});

// Function
Route::prefix('')->group(function () {
    Route::view('/thumb', 'v2.function.timthumb')->name('function.thumb');
});

// Route::get('/thumb/{file}', function ($file) {
//     return view('v2.function.timthumb')."?h=2500&w=1920&zc=1&src=".$file;
//     Route::view('/thumb', 'v2.function.timthumb')->name('thumb');
// });