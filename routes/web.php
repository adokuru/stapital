<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListingsController;

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

Route::get('/', 
[DashboardController::class, 'index'])
->name('home');

Route::any('/startups/search', 
[ListingsController::class, 'search_startups'])
->name('search_startups');



Route::get('/search/startups', 
[ListingsController::class, 'startups'])
->name('startups');



Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth'])->name('Admindashboard');
});

Route::group(['middleware' => ['role:startups']], function () {
    //
    Route::get('/startups/dashboard', function () {
        return view('startups/index');
    })->middleware(['auth'])->name('Starupsdashboard');
});

Route::group(['middleware' => ['role:admin|stake-holders']], function () {
    //
});

Route::group(['middleware' => ['role:admin|investors']], function () {
    //
});



require __DIR__.'/auth.php';
