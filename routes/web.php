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

Route::view('/', 'index')->name('index');

Route::view('/login', 'login')->name('login');

Route::get('/blog-post/{id}/{welcome?}', function ($id, $welcome = 1) {
    $pages = [
        1 => [
            'title' => 'from page 1',
        ],
        2 => [
            'title' => 'from page 2',
        ],
    ];
    $welcomes = [1 => '<b>Hello </b> ', 2 => 'Welcome to '];

    return view('blog-post', [
        'data' => $pages[$id],
        'welcome' => $welcomes[$welcome],
    ]);
})->name('blog-post');
