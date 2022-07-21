<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CustomerController;
use Carbon\Carbon;
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

Route::get('/', [SettingController::class, 'welcome'])->name('welcome');
Route::get('/about', [SettingController::class, 'about'])->name('about');
Route::get('/services', [SettingController::class, 'services'])->name('services');
Route::get('/payment_options', [SettingController::class, 'payment_options'])->name('payment_options');
Route::post('/contact', [SettingController::class, 'send_contact'])->name('contact');
Route::put('/settings/update/{setting}', [SettingController::class, 'update_2']);
Route::get('/messages', [SettingController::class, 'messages'])->name('messages');

Route::resources([
    'customers' => CustomerController::class,
    'applications' => ApplicationController::class,
    'settings' => SettingController::class,
]);

require __DIR__.'/auth.php';
