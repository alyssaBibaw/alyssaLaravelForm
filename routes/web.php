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



//displaying
Route::get('/Form','FormController@Form');
Route::get('/displayData','FormController@displayData');

//inserting data
Route::post('/insertData','FormController@insertData');


//displaying activity
Route::get('/activity','FormController@activity');

Route::post('/displayDatas','FormController@displayDatas');