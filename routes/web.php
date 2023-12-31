<?php
use Illuminate\Support\Facades\Route;

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
Route::get('/hello','App\Http\Controllers\PostController@hello');
Route::get('/data','App\Http\Controllers\PostController@data');
Route::get('/posts','App\Http\Controllers\PostController@index')->name('posts.index');
Route::get('/posts/create','App\Http\Controllers\PostController@create')->name('posts.create');
Route::post('/posts','App\Http\Controllers\PostController@store')->name('posts.store');
Route::put('/posts/{post}','App\Http\Controllers\PostController@update')->name('posts.update');
Route::delete('/posts/{post}','App\Http\Controllers\PostController@destroy')->name('posts.destroy');
Route::get('/posts/{post}','App\Http\Controllers\PostController@view')->name('posts.view');
Route::get('/posts/{post}/edit','App\Http\Controllers\PostController@edit')->name('posts.edit');