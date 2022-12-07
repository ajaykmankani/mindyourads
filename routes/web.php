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

Route::get('/login', function () {
    return view('login');
});

Route::get('user', 'Users@user');
Route::get('create', 'Users@create');
Route::post('loginSubmit', 'Users@loginSubmit');
Route::get('pricing', 'pages@pricing');
Route::get('blog-details', 'pages@blog_details');
Route::get('contact', 'pages@contact');
Route::get('about', 'pages@about');
Route::get('service', 'pages@service');
Route::get('service-details', 'pages@service_details');
Route::get('project', 'pages@project');
Route::get('blog', 'pages@blog');
Route::get('team', 'pages@team');
Route::get('faq', 'pages@faq');
Route::get('error', 'pages@error');
Route::post('contactForm', 'pages@contactForm');
