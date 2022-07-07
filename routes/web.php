<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\SettingController;
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

Route::get('/', [SettingController::class, 'index'])->name('welcome');
Route::get('/about', [SettingController::class, 'about'])->name('about');
//Route::view('/about', 'about');
//
//Route::get('/about', function () {
//    return view('welcome');
//})->name('about');

//Route::resources([
//    'properties' => PropertyController::class,
//    'recommendations' => RecommendationController::class,
//    'bookings' => BookingController::class,
//]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
