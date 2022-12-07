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
Route::get('pricing', 'Pages@pricing');
Route::get('blog-details', 'Pages@blog_details');
Route::get('contact', 'Pages@contact');
Route::get('about', 'Pages@about');
Route::get('service', 'Pages@service');
Route::get('service-details', 'Pages@service_details');
Route::get('project', 'Pages@project');
Route::get('blog', 'Pages@blog');
Route::get('team', 'Pages@team');
Route::get('faq', 'Pages@faq');
Route::get('error', 'Pages@error');
Route::post('contactForm', 'Pages@contactForm');
