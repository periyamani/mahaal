<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

  // Vendor
  Route::post('addGallery','App\Http\Controllers\GalleryController@create');
  Route::get('showGallery','App\Http\Controllers\GalleryController@show');
  Route::post('editGallery','App\Http\Controllers\GalleryController@update');
  Route::get('galleryValue','App\Http\Controllers\GalleryController@check');
  Route::delete('deleteGallery','App\Http\Controllers\GalleryController@destroy');
    
// Category
Route::post('addCategory','App\Http\Controllers\CategoryController@create');
Route::get('ShowCategory','App\Http\Controllers\CategoryController@show');
Route::post('editCategory','App\Http\Controllers\CategoryController@update');
Route::get('CategoryValue','App\Http\Controllers\CategoryController@check');
Route::delete('DeleteCategory','App\Http\Controllers\CategoryController@destroy');