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
    return view('public.home');
});

Route::get('about', function () {
    return view('public.about');
});
Route::get('service', function () {
    return view('public.service');
});
Route::get('team', function () {
    return view('public.team');
});
Route::get('blog', function () {
    return view('public.blog');
});
Route::get('blog-details', function () {
    return view('public.blog-details');
});
Route::get('appointment', function () {
    return view('public.appointment');
});
Route::get('contact', function () {
    return view('public.contact');
});
