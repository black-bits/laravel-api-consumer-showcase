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

Route::get('/', 'HomeController@home')->name('home');


Route::group(['prefix' => 'iex'], function () {

    Route::get('/symbols',                     'IEXController@list'             )->name('symbols.list');
    Route::get('/symbols/{apiSymbol}/company', 'IEXController@showSymbolCompany')->name('symbols.show.company');
});

Route::group(['prefix' => 'json-placeholder'], function () {

    Route::get('/users',    'JSONPlaceholderController@listUsers'   )->name('users.list');
    Route::get('/posts',    'JSONPlaceholderController@listPosts'   )->name('posts.list');
    Route::get('/posts/{post}/comments', 'JSONPlaceholderController@listComments')->name('comments.list');
});