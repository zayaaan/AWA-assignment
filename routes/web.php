<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;




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

Route::get('/','PostController@index')->name('post.index'); 
Route::get('create','PostController@create')->name('post.create'); 
Route::post('store','PostController@store')->name('post.store'); 
Route::get('/{id}','PostController@show')->name('post.show');
Route::post('update','PostController@update')->name('post.update');

//Route::get('/comment','CommentController@index')->name('comment.index'); 
//Route::post('/comment','CommentController@index')->name('comment.view');


Auth::routes(); 

// Route::get('/',[\App\Htpp\Controllers\HomeController::class, 'index'])->name('home');