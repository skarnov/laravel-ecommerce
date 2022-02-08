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
  |--------------------------------------------------------------------------
  | Dashboard
  |--------------------------------------------------------------------------
 */

//
//Route::middleware(['DashboardLogin'])->group(function () {
//    Route::get('dashboard', function () {
//        // Uses first & second middleware...
//    });
//
//});





//Route::middleware(['first', 'second'])->group(function () {
//    Route::get('/', function () {
//        // Uses first & second middleware...
//    });
//
//    Route::get('/user/profile', function () {
//        // Uses first & second middleware...
//    });
//});


Route::get('dashboard-login', 'App\Http\Controllers\DashboardLogin@index');
Route::post('dashboard-login-check', 'App\Http\Controllers\DashboardLogin@check')
        ->middleware(['throttle:adminForm'])
        ->name('dashboard.auth');
Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->middleware('DashboardLogin');
//Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->middleware('DashboardLogin');
//Route::get('settings', 'App\Http\Controllers\DashboardController@settings');