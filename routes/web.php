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
Route::get('/', 'HomeController@index')->name('index');
Auth::routes();
Route::get('about-us', 'HomeController@aboutUs')->name('aboutUs');
Route::get('support-us', 'HomeController@supportUs')->name('supportUs');
Route::get('contact-us', 'HomeController@contactUs')->name('contactUs');
Route::get('teams', 'HomeController@teams')->name('teams');
Route::resource('news', 'NewsController');
Route::resource('events', 'EventsController');
Route::middleware('auth')
    ->namespace('Backend')
    ->prefix('/admin')
    ->name('admin.')
    ->group(function ($router) {
        $router->get('/dashboard', 'DashboardController@index');
        $router->resource('news', 'NewsController');
        $router->resource('events', 'EventsController');
    });
