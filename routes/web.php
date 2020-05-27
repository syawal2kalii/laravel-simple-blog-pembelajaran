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
