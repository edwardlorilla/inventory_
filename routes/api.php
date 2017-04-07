<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('users', 'api\UsersController');
Route::resource('products', 'api\ProductsController');
Route::resource('locations', 'api\LocationsController');
Route::resource('manufactures', 'api\ManufacturesController');
Route::resource('categories', 'api\CategoryController');
Route::resource('departments', 'api\DepartmentsController');
Route::resource('brands', 'api\BrandControllers');
Route::resource('comments', 'api\CommentsControllers');