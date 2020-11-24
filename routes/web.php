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
    return view('index');
});
Route::get('about-us', function () {
    return view('about-us');
});
Route::get('blogs', function () {
    return view('blogs');
});
Route::get('contact-us', function () {
    return view('contact-us');
});
Route::get('mobile-apps-development', function () {
    return view('mobile-apps-development');
});
Route::get('our-aim', function () {
    return view('our-aim');
});
Route::get('portfolio', function () {
    return view('portfolio');
});
Route::get('our-services', function () {
    return view('our-services');
});
Route::get('testimonials', function () {
    return view('testimonials');
});
Route::get('web-apps-development', function () {
    return view('web-apps-development');
});
Route::get('databases', function () {
    return view('databases');
});
Route::get('marketing', function () {
    return view('marketing');
});
Route::get('graphic-design', function () {
    return view('graphic-design');
});
Route::get('search-engine-optimization', function () {
    return view('search-engine-optimization');
});
Route::get('content-writing', function () {
    return view('content-writing');
});