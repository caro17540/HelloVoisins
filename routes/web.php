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
Route::get('/users', 'UserController@listWithSkills')->name('users_list');
Route::resource('user', 'UserController');
    //Route::get('/user', 'UserController@index')->name('user.index');            **LISTE**
    //Route::get('/user/create', 'UserController@create')->name('user.create');   **FORMULAIRE POUR CREER UN USER**
    //Route::post('/user', 'UserController@store')->name('user.store');           **CREATION DU USER DANS LA TABLE**
    //Route::get('/user/{n}', 'UserController@show')->name('user.show');          **AFFICHAGE DES DONNEES DU USER n**
    //Route::get('/user/{n}/edit', 'UserController@edit')->name('user.edit');     **FORMULAIRE POUR MODIFIER DES DONNEES DU USER n**
    //Route::put('/user/{n}', 'UserController@update')->name('user.update');      **MISE A JOUR DU USER n DANS LA TABLE**
    //Route::delete('/user/{n}', 'UserController@destroy')->name('user.destroy'); **SUPPRESSION DU USER n DANS LA TABLE**
Route::get('/transactions', 'TransactionController@list');
Route::get('/transaction/{n}', 'TransactionController@read')->where('n','[0-9]+');
Route::get('/skills', 'SkillController@list')->name('skills');
Route::get('/skill/create', 'SkillController@getform')->name('skill_create');
Route::post('/skill/create', 'SkillController@postform')->name('skill_insert');
Route::get('/skill/update/{n}', 'SkillController@updateForm')->where('n','[0-9]+');
Route::post('/skill/update/{n}', 'SkillController@update')->where('n','[0-9]+');