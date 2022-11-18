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
    return view('welcome');
});
Route::get('/hello2', 'App\Http\Controllers\SiteController@hello');
Route::get('/hellodashboard', 'App\Http\Controllers\SiteController@dashboard');
Route::get('/photo', 'App\Http\Controllers\SiteController@photo');
Route::get('/demo', 'App\Http\Controllers\SiteController@demo');
Route::get('user2/{id?}', function ($id = 2) {
    return 'User' . $id;
});
Route::get('user/{id}', 'App\Http\Controllers\UserController@hello');
Route::get('posts/{post}/comments/{comments}', function ($post, $comment) {
    return "參數一{$post},參數二{$comment}";
});
Route::resource('photos', 'PhotoController');
