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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'tintucController@home');

Route::get('/them', function () {
    return view('them');
});
Route::post('/them-tin-tuc', 'tintucController@themTinTuc');

Route::get('/chi-tiet/{id}', 'tintucController@chiTiet');
Route::get('/sua/{id}','tintucController@laythongtinsua' );
Route::post('/sua-tin-tuc/{id}','tintucController@suatintuc');
Route::get('/xoa-tin-tuc/{id}','tintucController@xoatintuc');


