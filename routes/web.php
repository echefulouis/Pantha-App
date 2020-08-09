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
// Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// Auth::routes();

Route::get('/', 'SiteController@comingSoon')->name('coming-soon');

Route::post('/subscription', 'SiteController@subscribe')->name('subscription');

// Route::get('/', 'SiteController@index')->name('home');

// Route::get('/home', function(){ return redirect()->to('/'); });

// Route::get('/about', 'SiteController@about')->name('about');
// Route::get('/contact', 'SiteController@contact')->name('contact');
// Route::get('/privacy-policy', 'SiteController@policy')->name('privacy-policy');
// Route::get('/terms-conditions', 'SiteController@conditions')->name('terms-conditions');

