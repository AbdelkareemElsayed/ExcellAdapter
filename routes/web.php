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



Route::get('importItems', 'ExcellAdapterController@importView');
Route::post('importAction', 'ExcellAdapterController@importAction')->name('import');


Route::get('importJson','JsonAdapterController@importView');
Route::post('importJsonAction','JsonAdapterController@importAction')->name('importJson');


Route::get('TextEditor',function(){
    return view('editor');
});

