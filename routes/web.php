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

// Route::get('/', function () {
//     return view('welcome');
// });
    Route::get('login/register','Login\LoginController@register');
    Route::post('login/registerto','Login\LoginController@registerto');
    Route::get('login/login','Login\LoginController@Login');
    Route::post('login/loginto','Login\LoginController@Loginto');
    Route::any('/','Login\IndexController@index');

Route::get('author/index',"Index\AuthorController@index")->middleware('checkuser');
Route::get('login',"Index\UserController@login");