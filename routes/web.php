<?php

use Illuminate\Support\Facades\Route;

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


// Main Route
Route::get('/', 'MainController@index');

// Pets Routes
Route::group(['prefix' => 'pets'], function () {
    Route::get('/', 'PetController@index')->name('pets.index');
    Route::get('create', 'PetController@create')->name('pets.create');
    Route::post('store', 'PetController@store')->name('pets.store');
    Route::get('{id}/delete', 'PetController@delete')->name('pets.delete');
});


// Owners Routes
Route::group(['prefix' => 'owners'], function () {
    Route::get('/', 'OwnerController@index')->name('owners.index');
    Route::post('store', 'OwnerController@store')->name('owners.store');
    Route::get('{id}/edit', 'OwnerController@edit')->name('owners.edit');
    Route::post('{id}/update', 'OwnerController@update')->name('owners.update');
    Route::get('{id}/delete', 'OwnerController@delete')->name('owners.delete');
});

// Types Routes
Route::group(['prefix' => 'types'], function () {
    Route::get('/', 'TypeController@index')->name('types.index');
    Route::post('store', 'TypeController@store')->name('types.store');
    Route::post('{id}/update', 'TypeController@update')->name('types.update');
    Route::get('{id}/delete', 'TypeController@delete')->name('types.delete');
});
