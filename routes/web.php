<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Auth;
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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return redirect('/home');
})->middleware(['auth']);

Route::get('/offline', function () {
    return view('offline.index');
});

Route::get('/splashscreen', function () {
    return view('splashscreen');
});


//////////////////////////////////////////////////////////////////////////////////////////////////
// Home Controller
//////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('home', 'App\Http\Controllers\HomeController@index');
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
// Sensor Controller
//////////////////////////////////////////////////////////////////////////////////////////////////
Route::post('/sensorStore', 'App\Http\Controllers\SensorController@store')->name('sensor.store');
//////////////////////////////////////////////////////////////////////////////////////////////////

