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
Route::get('/developer-service', function () {
    return view('developer-service');
});
Route::get('/design-service', function () {
    return view('design-service');
});
Route::get('/marketing-service', function () {
    return view('marketing-service');
});
Route::get('/photography-service', function () {
    return view('photography-service');
});
Route::get('/videoediting-service', function () {
    return view('videoediting-service');
});
Route::get('/voiceover-service', function () {
    return view('voiceover-service');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
