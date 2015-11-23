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

Route::get('/', function () {
    return "Dudaae?";

});


Route::get('/profile', "usersController@profile");
Route::get('/about', "AboutCtrl@about");


Route::get('/fbfrinds','FbfrindsCtrl@index');
Route::get('/fbfrinds/create','FbfrindsCtrl@create');
Route::post('/fbfrinds/api_store','FbfrindsCtrl@api_store');
Route::get('/fbfrinds/all','FbfrindsCtrl@All');

Route::get('/fbfrinds/{id}','FbfrindsCtrl@show');
Route::post('/fbfrinds','FbfrindsCtrl@store');

Route::get('/api/store','ApiCalls@index');
Route::post('/api/store','ApiCalls@store_user');
