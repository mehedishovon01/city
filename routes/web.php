<?php

use Illuminate\Support\Facades\Auth;
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

// Welcome Page
// Route::get('/', function () {
//     return view('front.index');
// });
// Front
Route::get('/', 'FrontCOntroller@index');
Route::get('/about', 'FrontCOntroller@about')->name('front.about');
Route::get('/board-of-directors', 'FrontCOntroller@boardofdirectors')->name('boardofdirectors');
Route::get('/leadership', 'FrontCOntroller@leadership')->name('leadership');

// Authentication
Auth::routes(['register' => false]);
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

// Dashboard Information And 
Route::get('/home', 'HomeController@index')->name('home');

// Users Information And Creation
Route::resource('users', 'UserController');

// Given Permission
Route::resource('give-permissions', 'Permission\PermissionController');

// Units
Route::resource('units', 'UnitController');
// Route::get('units-restore', 'UnitController@restoreAll');

// Categories
Route::resource('categories', 'CategoryController');

// About Us
// Route::resource('about', 'AboutController');
Route::resource('sliders', 'SliderController');
Route::resource('our-services', 'OurServicesController');
Route::resource('latest-news', 'LatestNewsController');
Route::resource('stay-up-to-date', 'StayUpToDateController');
Route::resource('feature-news', 'FeatureNewsController');
