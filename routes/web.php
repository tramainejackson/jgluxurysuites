<?php

use App\Http\Controllers\ApplicationController;
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
Route::get('/services', [SettingController::class, 'services'])->name('services');
Route::get('/payment_options', [SettingController::class, 'payment_options'])->name('payment_options');
Route::post('/contact', [SettingController::class, 'send_contact'])->name('contact');

Route::resources([
    'applications' => ApplicationController::class,
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
