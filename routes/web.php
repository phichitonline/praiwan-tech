<?php

// namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;

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
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('customers', CustomersController::class);
Route::resource('services', ServiceController::class);
