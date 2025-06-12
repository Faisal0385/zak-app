<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\PropertiesListController;
use App\Http\Controllers\PropertyAmenitiesController;
use App\Http\Controllers\PropertyDetailController;
use App\Http\Controllers\PropertyLabelController;
use App\Http\Controllers\PropertyStatusController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SinglePropertyListController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialMediaLinkController;
use App\Http\Controllers\StateController;
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

Route::get('/', [HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/contact', [ContactController::class, 'index'])->name('contact.view');


## Admin
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

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

## Property Status
Route::get('/property/status/index', [PropertyStatusController::class, 'index'])->name('property.status.index');
Route::get('/property/status/create', [PropertyStatusController::class, 'create'])->name('property.status.create');
Route::get('/property/status/{id}/edit', [PropertyStatusController::class, 'edit'])->name('property.status.edit');

Route::post('/property/status/store', [PropertyStatusController::class, 'store'])->name('property.status.store');
Route::post('/property/status/{id}/update', [PropertyStatusController::class, 'update'])->name('property.status.update');
Route::post('/property/status/{id}/destroy', [PropertyStatusController::class, 'destroy'])->name('property.status.destroy');
Route::post('/property/status/{id}', [PropertyStatusController::class, 'changeStatus'])->name('property.status');

## Property Type
Route::get('/property/type/index', [PropertyTypeController::class, 'index'])->name('property.type.index');
Route::get('/property/type/create', [PropertyTypeController::class, 'create'])->name('property.type.create');
Route::get('/property/type/{id}/edit', [PropertyTypeController::class, 'edit'])->name('property.type.edit');

Route::post('/property/type/store', [PropertyTypeController::class, 'store'])->name('property.type.store');
Route::post('/property/type/{id}/update', [PropertyTypeController::class, 'update'])->name('property.type.update');
Route::post('/property/type/{id}/destroy', [PropertyTypeController::class, 'destroy'])->name('property.type.destroy');
Route::post('/property/type/{id}', [PropertyTypeController::class, 'changeStatus'])->name('property.type.status');

## Property Label
Route::get('/property/label/index', [PropertyLabelController::class, 'index'])->name('property.label.index');
Route::get('/property/label/create', [PropertyLabelController::class, 'create'])->name('property.label.create');
Route::get('/property/label/{id}/edit', [PropertyLabelController::class, 'edit'])->name('property.label.edit');

Route::post('/property/label/store', [PropertyLabelController::class, 'store'])->name('property.label.store');
Route::post('/property/label/{id}/update', [PropertyLabelController::class, 'update'])->name('property.label.update');
Route::post('/property/label/{id}/destroy', [PropertyLabelController::class, 'destroy'])->name('property.label.destroy');
Route::post('/property/label/{id}', [PropertyLabelController::class, 'changeStatus'])->name('property.label.status');

## Property Amenities
Route::get('/property/amenities/index', [PropertyAmenitiesController::class, 'index'])->name('property.amenities.index');
Route::get('/property/amenities/create', [PropertyAmenitiesController::class, 'create'])->name('property.amenities.create');
Route::get('/property/amenities/{id}/edit', [PropertyAmenitiesController::class, 'edit'])->name('property.amenities.edit');

Route::post('/property/amenities/store', [PropertyAmenitiesController::class, 'store'])->name('property.amenities.store');
Route::post('/property/amenities/{id}/update', [PropertyAmenitiesController::class, 'update'])->name('property.amenities.update');
Route::post('/property/amenities/{id}/destroy', [PropertyAmenitiesController::class, 'destroy'])->name('property.amenities.destroy');
Route::post('/property/amenities/status/{id}', [PropertyAmenitiesController::class, 'changeStatus'])->name('property.amenities.status');

## Add Project
Route::get('/project/index', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::get('/project/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');

Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
Route::post('/project/{id}/update', [ProjectController::class, 'update'])->name('project.update');
Route::post('/project/{id}/destroy', [ProjectController::class, 'destroy'])->name('project.destroy');
Route::post('/project/status/{id}', [ProjectController::class, 'changeStatus'])->name('project.status');

## Add Properties
Route::get('/properties/index', [PropertiesController::class, 'index'])->name('properties.index');
Route::get('/properties/{id}/edit', [PropertiesController::class, 'edit'])->name('properties.edit');

Route::get('/properties/{id}/add', [PropertiesController::class, 'add'])->name('properties.add');

Route::post('/properties/create', [PropertiesController::class, 'create'])->name('properties.create');

Route::post('/properties/{id}/location', [PropertiesController::class, 'updateLocation'])->name('properties.location');
Route::post('/properties/{id}/video', [PropertiesController::class, 'updateVideoURL'])->name('properties.video');
// Route::get('/properties/{id}/status', [PropertiesController::class, 'updateStatus'])->name('properties.status');
Route::post('/properties/{id}/featured/image', [PropertiesController::class, 'updateFeaturedImage'])->name('properties.featured.image');
Route::post('/properties/{id}/file', [PropertiesController::class, 'uploadPdfFile'])->name('properties.file');
Route::post('/properties/{id}/gallery/image', [PropertiesController::class, 'storeGalleryImage'])->name('properties.gallery.image');
Route::post('/properties/status/{id}', [PropertiesController::class, 'changeStatus'])->name('properties.status');



## Country
Route::get('/country/index', [CountryController::class, 'index'])->name('country.index');
Route::get('/country/create', [CountryController::class, 'create'])->name('country.create');
Route::get('/country/{id}/edit', [CountryController::class, 'edit'])->name('country.edit');

Route::post('/country/store', [CountryController::class, 'store'])->name('country.store');
Route::post('/country/{id}/update', [CountryController::class, 'update'])->name('country.update');
Route::post('/country/{id}/destroy', [CountryController::class, 'destroy'])->name('country.destroy');
Route::post('/country/{id}/status', [CountryController::class, 'changeStatus'])->name('country.status');

## state
Route::get('/state/index', [StateController::class, 'index'])->name('state.index');
Route::get('/state/create', [StateController::class, 'create'])->name('state.create');
Route::get('/state/{id}/edit', [StateController::class, 'edit'])->name('state.edit');

Route::post('/state/store', [StateController::class, 'store'])->name('state.store');
Route::post('/state/{id}/update', [StateController::class, 'update'])->name('state.update');
Route::post('/state/{id}/destroy', [StateController::class, 'destroy'])->name('state.destroy');
Route::post('/state/{id}/status', [StateController::class, 'changeStatus'])->name('state.status');

## City
Route::get('/city/index', [CityController::class, 'index'])->name('city.index');
Route::get('/city/create', [CityController::class, 'create'])->name('city.create');
Route::get('/city/{id}/edit', [CityController::class, 'edit'])->name('city.edit');

Route::post('/city/store', [CityController::class, 'store'])->name('city.store');
Route::post('/city/{id}/update', [CityController::class, 'update'])->name('city.update');
Route::post('/city/{id}/destroy', [CityController::class, 'destroy'])->name('city.destroy');
Route::post('/city/{id}/status', [CityController::class, 'changeStatus'])->name('city.status');

## Search
Route::get('/search', [SearchController::class, 'search'])->name('search');


## Project Details
Route::get('/single/property/{id}/list', [SinglePropertyListController::class, 'index'])->name('single.property.list');


## Property list
Route::get('/properties/list', [PropertiesListController::class, 'index'])->name('properties.list');

## Property Detail
Route::get('/property/{id}/detail', [PropertyDetailController::class, 'index'])->name('property.detail');
