<?php

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

Route::prefix('/')
    ->namespace('Home')
    ->group(function (){
        Route::resource('/', 'HomeController');
});


Route::prefix('/home')
    ->namespace('Admin')
    ->group(function (){
        Route::resource('/', 'DashboardController');
        Route::resource('/kedua', 'KeduaController');
        // Route::resource('/slide', 'SlideController');
        // Route::resource('/emas', 'EmasController');
        // Route::resource('/pertanian', 'PertanianController');
        // Route::resource('/berita', 'BeritaController');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
