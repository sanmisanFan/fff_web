<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//redirect to fff articles page (temporery)
Route::get('/', function () {
    return redirect('/article');
    //return view('welcome');
});

Route::get('article', 'ArticleController@index');

Route::get('article/{slug}', 'ArticleController@showPost');

//Admin section
Route::get('admin', function() {
    //
    return redirect('/admin/post');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function() {
    //
    Route::resource('admin/post', 'PostController@index');
    Route::resource('admin/tag', 'TagController');
    Route::get('admin/upload', 'UploadController@index');
});

//Logging in and out
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');



//Route::get('/dbtest', 'IndexController@index');
//Route::get('admin/login', 'Admin\LoginController@login');

//Route::auth();

//Route::get('/home', 'HomeController@index');
