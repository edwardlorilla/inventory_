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
})->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('users', 'UsersController');
Route::resource('techitems', 'ProductsController');
Route::resource('locations', 'LocationsController');
Route::resource('manufactures', 'ManufacturesController');
Route::resource('categories', 'CategoryController');
Route::resource('departments', 'DepartmentsCobtroller');
Route::resource('brands', 'BrandControllers');
Route::resource('comments', 'CommentsControllers');
Route::resource('descriptions', 'DescriptionController');
Route::resource('createcfat', 'TransferController');
Route::resource('descriptions', 'DescriptionController');