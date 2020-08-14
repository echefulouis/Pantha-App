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


Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::post('/subscription', 'SiteController@subscribe')->name('subscription');


// Route::get('/', 'SiteController@comingSoon');

Route::get('/', 'SiteController@index')->name('home');

Route::get('/home', function(){ return redirect()->to('/'); });

Route::get('/about', 'SiteController@about')->name('about');
Route::get('/contact', 'SiteController@contact')->name('contact');


Route::get('/company/login', 'Company\AccountController@showLoginForm')->name('company.login');
Route::post('/company/login', 'Company\AccountController@login')->name('submit.login');
Route::get('/company/register', 'Company\AccountController@showRegisterForm')->name('company.register');
Route::post('/company/register', 'Company\AccountController@register')->name('submit.register');

Route::get('/dashboard', 'SiteController@dashboard')->name('dashboard');

Route::middleware(['auth'])->group(function(){

	Route::prefix('user')->middleware(['role:user'])->name('user.')->group(function () {
		Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
		Route::get('/message', 'DashboardController@message')->name('message');
		Route::get('/traveller', 'DashboardController@traveller')->name('traveller');
		Route::get('/sender', 'DashboardController@sender')->name('sender');
		Route::get('/support', 'DashboardController@support')->name('support');

	});

	Route::prefix('company')->namespace('Company')->name('company.')->middleware(['role:company'])->group(function () {

	});

	Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware(['role:admin'])->group(function () {

	});

	Route::prefix('app')->namespace('App')->middleware(['role:admin,company,user'])->group(function () {
		
		Route::resource('/messages', 'MessageController');
		
		Route::post('/mark-all-seen','MessageController@markAsSeen');
		Route::get('/contacts','MessageController@contacts');
		Route::get('/count_unread','MessageController@count_unread_chat');

	});
});


