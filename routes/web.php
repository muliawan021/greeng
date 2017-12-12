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
Route::get('/artikel/new',function(){
    return view('artikel');
});

Route::post('artikel/create','ArtikelController@create');
Route::get('artikel','ArtikelController@view');
Route::get('artikel/{id}/edit','ArtikelController@edit');
Route::post('artikel/{id}/update','ArtikelController@update');
Route::get('artikel/{id}/delete','ArtikelController@delete');

Route::get('user',function(){
    return view('userregister');
});
Route::post('user/register','UserController@register');
Route::get('user/{id}/edit','UserController@edit');
Route::post('user/{id}/update','UserController@update');