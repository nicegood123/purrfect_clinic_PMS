<?php

use Illuminate\Support\Facades\Route;

// Main Route
Route::get('/', 'MainController@index');

// Pets Routes
Route::group(['prefix' => 'pets'], function () {
    Route::get('/', 'PetController@index')->name('pets.index');
    Route::get('create', 'PetController@create')->name('pets.create');
    Route::post('store', 'PetController@store')->name('pets.store');
    Route::get('{id}/edit', 'PetController@edit')->name('pets.edit');
    Route::post('{id}/update', 'PetController@update')->name('pets.update');
    Route::get('{id}/delete', 'PetController@delete')->name('pets.delete');
});

// Owners Routes
Route::group(['prefix' => 'owners'], function () {
    Route::get('/', 'OwnerController@index')->name('owners.index');
    Route::get('create', 'OwnerController@create')->name('owners.create');
    Route::post('store', 'OwnerController@store')->name('owners.store');
    Route::get('edit/{id}', 'OwnerController@edit')->name('owners.edit');
    Route::post('update/{id}', 'OwnerController@update')->name('owners.update');
    Route::get('delete/{id}', 'OwnerController@delete')->name('owners.delete');
});

// Breed Routes
Route::group(['prefix' => 'breeds'], function () {
    Route::get('/', 'BreedController@index')->name('breeds.index');
    Route::post('store', 'BreedController@store')->name('breeds.store');
    Route::post('{id}/update', 'BreedController@update')->name('breeds.update');
    Route::get('{id}/delete', 'BreedController@delete')->name('breeds.delete');
});

// Types Routes
Route::group(['prefix' => 'types'], function () {
    Route::get('/', 'TypeController@index')->name('types.index');
    Route::post('store', 'TypeController@store')->name('types.store');
    Route::post('{id}/update', 'TypeController@update')->name('types.update');
    Route::get('{id}/delete', 'TypeController@delete')->name('types.delete');
});
