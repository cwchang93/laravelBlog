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
//  要如何讓同一個url根據是否有登入導到不同頁面？

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'IndexController@index')->name('index');

Route::get('/login', 'IndexController@login')->name('login');

Route::resource('/posts', 'PostController')->only(['index', 'show', 'create', 'store']); // 一開始只要display資料 
