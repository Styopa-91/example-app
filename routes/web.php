<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Lot'], function (){
    Route::get('/lots', 'IndexController')->name('lot.index');
    Route::get('/lots/create', 'CreateController')->name('lot.create');
    Route::post('/lots', 'StoreController')->name('lot.store');
    Route::get('/lots/{lot}', 'ShowController')->name('lot.show');
    Route::get('/lots/{lot}/edit', 'EditController')->name('lot.edit');
    Route::patch('/lots/{lot}', 'UpdateController')->name('lot.update');
    Route::delete('/lots/{lot}', 'DestroyController')->name('lot.delete');

});

Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');

Route::get('categories', 'App\Http\Controllers\CategoryController@index')->name('category.index');
Route::get('/categories/create', 'App\Http\Controllers\CategoryController@create')->name('category.create');
Route::get('/categories/{category}', 'App\Http\Controllers\CategoryController@show')->name('category.show');
Route::post('/categories', 'App\Http\Controllers\CategoryController@store')->name('category.store');
Route::get('/categories/{category}/edit', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');
Route::delete('/categories/{category}', 'App\Http\Controllers\CategoryController@destroy')->name('category.delete');
Route::patch('/categories/{category}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
