<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\Maps1Controller;
use App\Http\Controllers\Maps2Controller;
use App\Http\Controllers\Maps3Controller;
use App\Http\Controllers\Maps4Controller;
use App\Http\Controllers\Maps5Controller;

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

Route::resource('/', HomeController::class);
Route::resource('maps', MapsController::class);
Route::resource('maps1', Maps1Controller::class);
Route::resource('maps2', Maps2Controller::class);
Route::resource('maps3', Maps3Controller::class);
Route::resource('maps4', Maps4Controller::class);
Route::resource('maps5', Maps5Controller::class);

