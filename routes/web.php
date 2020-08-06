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

// LP獲得用
Route::get('job', function () {
    return view('sc.check');
    // return view('sc.job'); //獲得LP(1)
});

// 確認用
Route::get('cccheck', function () {
    return view('sc.job'); //獲得LP(1)
});
