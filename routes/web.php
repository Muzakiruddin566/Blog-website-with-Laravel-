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

Route::get('/', 'NewBlogController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/newBlog', function () {
    return view('newblog');
})->name('newblog')->middleware('auth');
Route::post('/submitform1', 'NewBlogController@store')->name('submit');
Route::get('/blog/{id}','NewBlogController@blog');
