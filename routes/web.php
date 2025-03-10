<?php

use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;

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

Route::get('/planetenasdfasdfasdfasdf', function () {
    return view('planets');
});

Route::get('/planets', [PlanetController::class, 'index']);

Route::get('/planets/{name}', [PlanetController::class, 'show']);
