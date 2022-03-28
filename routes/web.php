<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Admin\DestinationList;

use App\Http\Livewire\Admin\Categories;
use App\Http\Livewire\Admin\Packages;
use App\Http\Livewire\Admin\TexiServices;
use App\Http\Livewire\Admin\Hotels;

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

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('clear-cache', function () {
    $exitCode = Artisan::call('optimize:clear');
    echo 'cache cleared';
});
Route::get('', [FrontController::class, 'index']);
Route::get('about', [FrontController::class, 'about']);
Route::get('package', [FrontController::class, 'package']);
Route::get('blog', [FrontController::class, 'blog']);
Route::get('testimonial', [FrontController::class, 'testimonial']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('texi_service', [FrontController::class, 'texiservices']);

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
Route::get('logout', [FrontController::class, 'logout']);


Auth::routes();

/* Route::get('/package',Packages::class)->name('admin/package');
Route::get('/dashboard',DashboardController::class)->name('admin/dashboard');
Route::get('/destination',DestinationList::class)->name('admin/destination'); */

Route::get('home', [DashboardController::class, 'index']);
Route::get('admin/destinations', DestinationList::class);
Route::get('admin/categories', Categories::class);
Route::get('admin/packages', Packages::class);
Route::get('admin/texiservice', TexiServices::class);
Route::get('admin/hotels', Hotels::class);
/* Route::middleware(['auth:sanctum', 'verified'])->get('fake/dashboard', function () {
    return view('fake.dashboard');
})->name('dashboard'); */
