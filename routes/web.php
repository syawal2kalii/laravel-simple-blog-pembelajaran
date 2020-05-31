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
Route::get('/article/{id}','ArticleController@getArticleById');

//_5_templating
Route::get('/about',function (){
    return view('about');
});

// 10_passing data melalui request dan route wildcard
Route::get('/request-passing/',function (){
    return "nama : ".request('nama');
});
Route::get('/wildcard-url/{id}','ArticleController@wildcard'); // wildcard
Route::get('list-users','UserController@index');
Route::get('/list-users/{user}','UserController@allusers')->name('list-users');

//Auth
Route::get('/home',function (){
    return view('home');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

