<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;
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

/* 
# Routes Home
=====================
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/map', [HomeController::class, 'map'])->name('map');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('city/{city:slug}/places', [PlaceController::class, 'show'])->name('city.places');


/* 
# Routes admin
=====================
*/

Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'adminHome'])->name('admin.dashboard');
        Route::get('city', [CityController::class, 'index'])->name('city.index');
        Route::get('city/create', [CityController::class, 'create'])->name('city.create');
        Route::post('city/store', [CityController::class, 'store'])->name('city.store');
        Route::post('city/like', [CityController::class, 'like'])->name('city.like');
        Route::get('city/favourite', [PlaceController::class, 'fav'])->name('city.fav');

        // places Routes
        Route::get('places', [PlaceController::class, 'index'])->name('admin.place.index');
        Route::get('place/create', [PlaceController::class, 'create'])->name('admin.place.create');
        Route::post('place/store', [PlaceController::class, 'store'])->name('admin.place.store');
    });
});


Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
