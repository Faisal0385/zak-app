<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialMediaLinkController;
use App\Models\SocialMediaLink;
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
    return view('client.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Route::get('/about', [AboutController::class, 'index'])->name('about.view');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.view');


## Admin
Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'verified']);

## Category
Route::resource('categories', CategoryController::class);
Route::post('/categories/status/{id}', [CategoryController::class, 'changeStatus'])->name('categories.status');

## Slider
Route::resource('slider', SliderController::class);
Route::post('/slider/status/{id}', [SliderController::class, 'changeStatus'])->name('slider.status');

## About
Route::resource('about', AboutPageController::class);
Route::post('/admin/about/update/{id}', [AboutPageController::class, 'update'])->name('about.update');

## SiteSetting
Route::get('/settings/create', [SiteSettingController::class, 'create'])->name('settings.create');
Route::post('/settings/update', [SiteSettingController::class, 'update'])->name('settings.update');

## Social Media Link
Route::get('/social/link/index', [SocialMediaLinkController::class, 'index'])->name('social.link.index');
Route::get('/social/link/create', [SocialMediaLinkController::class, 'create'])->name('social.link.create');
Route::get('/social/link/{id}/edit', [SocialMediaLinkController::class, 'edit'])->name('social.link.edit');

Route::post('/social/link/store', [SocialMediaLinkController::class, 'store'])->name('social.link.store');
Route::post('/social/link/{id}/update', [SocialMediaLinkController::class, 'update'])->name('social.link.update');
Route::post('/social/link/{id}/destroy', [SocialMediaLinkController::class, 'destroy'])->name('social.link.destroy');

## Social Media Link
Route::get('/amenities/index', [AmenitiesController::class, 'index'])->name('amenities.index');
Route::get('/amenities/create', [AmenitiesController::class, 'create'])->name('amenities.create');
Route::get('/amenities/{id}/edit', [AmenitiesController::class, 'edit'])->name('amenities.edit');

Route::post('/amenities/store', [AmenitiesController::class, 'store'])->name('amenities.store');
Route::post('/amenities/{id}/update', [AmenitiesController::class, 'update'])->name('amenities.update');
Route::post('/amenities/{id}/destroy', [AmenitiesController::class, 'destroy'])->name('amenities.destroy');