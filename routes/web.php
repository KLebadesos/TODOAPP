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
    return view('welcome');
});

//navigation
Route::get('todos','TodosController@index');
Route::get('new-todos','TodosController@create');

//view
Route::get('todos/{todo}','TodosController@show');
//store
Route::post('store-todos','TodosController@store');
//edit
Route::get('todos/{todo}/edit','TodosController@edit');
//update
Route::post('todos/{todo}/update-todos','TodosController@update');
//delete
Route::get('todos/{todo}/delete','TodosController@destroy');
//complete
Route::get('todos/{todo}/complete','TodosController@complete');