<?php

use App\Http\Controllers\CMS\DashboardController;
use App\Http\Controllers\Guest\Category;
use App\Http\Controllers\Guest\Homepage;
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

// Route for guest
Route::group([
    'middleware' => ['guest'],
], function () {
    Route::get('/', [Homepage::class, 'index'])->name('guest.homepage.index');
    Route::get('/category', [Category::class, 'index'])->name('guest.category.index');
});

// Route for cms dashboard
Route::group([
    'prefix' => 'cms',
    'middleware' => ['guest'],
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('cms.dashboard.index');
});
