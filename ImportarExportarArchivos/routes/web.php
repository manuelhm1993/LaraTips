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

Route::name('users.')->group(function () {
    Route::get('user-list-pdf', 'UserController@exportPDF')->name('pdf');
    Route::get('user-list-excel', 'UserController@exportEXCEL')->name('excel');

    Route::post('import-list-excel', 'UserController@importEXCEL')->name('excel.import');
});
