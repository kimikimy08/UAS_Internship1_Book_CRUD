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
    return view('main');
});

Route::get('books', 'BookController@index') -> name('book.index');

Route::get('create', 'BookController@create') -> name('create.book');

Route::post('store', 'BookController@store') -> name('book.store');

Route::get('edit/book/{id}', 'BookController@edit');

Route::post('update/book/{id}', 'BookController@update');

Route::get('delete/book/{id}', 'BookController@delete');

Route::get('show/book/{id}', 'BookController@show');
