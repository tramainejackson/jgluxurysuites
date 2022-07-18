<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\SettingController;
use App\Models\Application;
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

Route::get('/', [SettingController::class, 'index'])->name('welcome');
Route::get('/about', [SettingController::class, 'about'])->name('about');
Route::get('/services', [SettingController::class, 'services'])->name('services');
Route::get('/payment_options', [SettingController::class, 'payment_options'])->name('payment_options');
Route::post('/contact', [SettingController::class, 'send_contact'])->name('contact');

Route::resources([
    'applications' => ApplicationController::class,
]);

Route::get('/dashboard', function () {
    $admin = Auth::user();
    $contact_count = Application::all();
    $consults = Application::all();
    $open_consults = Application::all();
    $testimonials = Application::all();
    $today = Carbon::now();
    $consult_created = null;
    $testimonial_created = null;
    $open_consults->isNotEmpty() ? $open_consults = $open_consults->count() : $open_consults = 0;
    $testimonials->isNotEmpty() ? $testimonials = $testimonials->count() : $testimonials = 0;

    // Create Carbon Date if there is an open consult
    $open_consults !== 0 ? $consult_created = new Carbon(Application::all()->first()->created_at) : null;

    // Create Carbon Date if there is testimonials availble
    $testimonials !== 0 ? $testimonial_created = new Carbon(Application::all()->first()->created_at) : null;

    return view('dashboard', compact('admin', 'consults', 'open_consults', 'contact_count', 'consult_created', 'today', 'testimonials', 'testimonial_created'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
