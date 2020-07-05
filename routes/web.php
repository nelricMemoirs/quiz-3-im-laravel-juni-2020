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

Route::get('/', function () {
    return view('ui.home');
});

Route::get('/artikel/create', 'ArticleController@create')->name('article.create'); // menampilkan halaman form
Route::post('/artikel', 'ArticleController@store')->name('article.store'); // menyimpan data
Route::get('/artikel', 'ArticleController@index')->name('article.index'); // menampilkan semua
Route::get('/artikel/{id}', 'ArticleController@show')->name('article.show'); // menampilkan detail item dengan id 
Route::get('/artikel/{id}/edit', 'ArticleController@edit')->name('article.edit'); // menampilkan form untuk edit item
Route::put('/artikel/{id}', 'ArticleController@update')->name('article.update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{id}', 'ArticleController@destroy')->name('article.destroy'); // menghapus data dengan id