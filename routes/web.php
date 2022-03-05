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
/*
| student  routes.
*/
Route::group([
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'register',
], function () {
    Route::get('insert', 'StudentRegisterController@insert');
    Route::post('create', 'StudentRegisterController@create');
    Route::get('list', 'StudentRegisterController@List');
});
