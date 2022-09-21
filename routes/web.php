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

Route::get('/', function () {
    return view('frontend_view.index');
});
Route::get('/index', function () {
    return view('frontend_view.index');
});
Route::get('/booking', function () {
    return view('frontend_view.booking');
});
Route::get('/index1', function () {
    return view('frontend_view.index1');
});
Route::get('/about', function () {
    return view('frontend_view.about');
});
Route::get('/services', function () {
    return view('frontend_view.services');
});
Route::get('/amenities', function () {
    return view('frontend_view.amenities');
});
Route::get('/one_stop', function () {
    return view('frontend_view.one_stop');
});
Route::get('/gallery', function () {
    return view('frontend_view.gallery');
});
Route::get('/blog', function () {
    return view('frontend_view.blog');
});
Route::get('/contact', function () {
    return view('frontend_view.contact');
});
Route::get('/vendor', function () {
    return view('frontend_view.vendor');
});
Route::get('/profile', function () {
    return view('frontend_view.profile');
});
Route::get('/order_summary', function () {
    return view('frontend_view.order_summary');
});

Route::get('/booking_details', function () {
    return view('frontend_view.booking_details');
});
Route::get('/profile', function () {
    return view('frontend_view.profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/user/booking_admin', function () {
    return view('backend_view.booking_admin');
})->middleware('auth');

Route::get('/user/category', function () {
    return view('backend_view.category');
})->middleware('auth');
Route::get('/user/vendor', function () {
    return view('backend_view.vendor');
})->middleware('auth');









