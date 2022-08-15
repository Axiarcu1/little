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
    return view('pages.home');
})->name('home');

Route::get('/event', function () {
    return view('pages.event');
})->name('event');

Route::get('/detailed', function () {
    return view('pages.detailed');
})->name('detailed');

Route::get('/payment', function () {
    return view('pages.payment');
})->name('payment');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
