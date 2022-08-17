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
    // Route::post('save', 'FeedbackSourcesController@save');
    // Route::post('update/{id}', 'FeedbackSourcesController@update');
    // Route::get('delete/{id}', 'FeedbackSourcesController@delete');
});


// Owners Routes
Route::group(['prefix' => 'owners'], function () {
    Route::get('/', 'OwnerController@index')->name('owners.index');
});
