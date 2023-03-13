<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DmcController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'showHome'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'showDashboard'])->name('dashboard');
    Route::get('/dashboard/search', [HomeController::class, 'searchDmc'])->name('dashboard.search');
    Route::post('/dashboard/search', [HomeController::class, 'searchDmc']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
