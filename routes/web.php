<?php

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

// 网站主页
Route::get('/', function () {return view('home');});

/**
 * 博客
 */
Route::namespace('Blog')->group(function () {
    Route::get('blog', 'PagesController@root')->name('root');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
