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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/' , 'HomeController@index')->name('home');
Route::get('/account'/,'AccountController@form');
Route::post('account', 'AccountController@update');
Route:: post('/users',UserController@list');
Route::get('/transactions' , 'transactionController@list');
Route::get('/user{n}' , 'userController@read');
Route::get('/transactions' , 'transactionController@list');
Route::get('/user{n}' , 'userController@read');
Route::get('/skills', 'SkillController@list');
Route::get('skill/create','!SkillController@form');
Route::get('/skill/upate/{n}','SkillController@form');
Route::get('/skill/update/{n}',SkillController@update');

