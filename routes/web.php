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
    return view('welcome');
});

// return string
Route::get('/hello', function (){
    return "hello world";
});

// return view (html)
Route::get('/hello-html', function (){
    return view('helloworld');//note : buat html di resources/views
});

//route with controller
Route::get('/article','ArticleController@index');
//Route::get('/article/{id}','ArticleController@getArticleById');

//_5_templating
Route::get('/about',function (){
    return view('about');
});

Route::get('/home',function (){
    return view('home');
});

//default auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Article
Route::get('/articles','ArticleController@index'); // tanpa namespace
Route::get('/article/create','ArticleController@create')->name('article.create'); // route untuk menampilkan Form create menggunakan namespace
Route::post('/article/store','ArticleController@store')->name('article.store'); // route untuk menyimpan ke db
Route::get('/article/delete/{slug}','ArticleController@destroy')->name('article.destroy'); // route untuk delete
Route::post('/article/edit','ArticleController@show')->name('article.edit'); // route untuk menampilkan form edit/update
Route::post('/article/update','ArticleController@update')->name('article.update'); // route untuk update

