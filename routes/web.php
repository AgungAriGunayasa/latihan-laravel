<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CollegeController;

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
    return redirect('/home');
});

Route::get('/about', function () {
    return redirect('/about');
});

Route::get('/college', function () {
    return redirect('/college');
});

Route::get('home', [HomeController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('college', [CollegeController::class, 'index']);