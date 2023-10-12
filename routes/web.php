<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\mapsController;
use App\Http\Controllers\pemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/geoip', function(){
    $checkLocation = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
    return 'Alamat IP: '.$checkLocation->ip;
});

//Route::get('/location', [locationController::class, 'index']);

Route::get('/pemesanan', [pemesananController::class, 'index']);

Route::get('/maps', [mapsController::class, 'index']);

Route::get('/login', [loginController::class, 'index']); //->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

Route::get('/dashboard', [dashboardController::class, 'index']);