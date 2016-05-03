<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    /*surprise*/
    Route::resource('/','SurpriseController');
    Route::get('/about','SurpriseController@about');
    Route::get('/complete','SurpriseController@complete');
    Route::get('/fail','SurpriseController@fail');
    /*backstage login*/
    Route::get('login','LoginController@index'); //連結資料，基本的連結 response
    Route::post('login','LoginController@session'); //接收post資料
    Route::get('logout','LoginController@logout'); //登出

    /*backstage*/
    Route::resource('news','NewsController'); //resource 是指依照原始規則走
    Route::resource('email','EmailController');
    Route::resource('admin','AdminController');
});