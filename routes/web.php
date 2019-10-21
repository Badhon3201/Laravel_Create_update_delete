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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','aboutController@about');
//CRUD-=Create, read, Upgrade, Delete
Route::get('/all_data', 'contactController@index');
Route::get('/contact/create', 'contactController@create');
Route::post('/contact/store', 'contactController@store')->name('contact.store') ;
Route::get('/contact/{id}/edit', 'contactController@edit')->name('contact.edit') ;
Route::post('/contact/{id}/update', 'contactController@update')->name('contacts.update') ;
Route::get('/contact/{id}/delete', 'contactController@destroy')->name('contact.destroy') ;
