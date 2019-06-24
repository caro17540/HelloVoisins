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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/account', 'AccountController@form')->name('account');
Route::post('/account', 'AccountController@update');
Route::get('/account/delete', 'AccountController@delete')->name('account_delete');
Route::get('/users', 'UserController@list')->name('users_list');
Route::get('/users/filter', 'UserController@filter')->name('users_filter');
Route::get('/user/{n}', 'UserController@read')->where('n','[0-9]+');
Route::get('/transactions', 'TransactionController@list');
Route::get('/transaction/{n}', 'TransactionController@read')->where('n','[0-9]+');
Route::get('/skills', 'SkillController@list')->name('skills');
Route::get('/skill/create', 'SkillController@getform')->name('skill_create');
Route::post('/skill/create', 'SkillController@postform')->name('skill_create');
Route::get('/skill/update/{n}', 'SkillController@updateForm')->where('n','[0-9]+');
Route::post('/skill/update/{n}', 'SkillController@update')->where('n','[0-9]+');

