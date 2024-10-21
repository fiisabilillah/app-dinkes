<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperController;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

///// Super Group Middleware
Route::middleware(['auth', 'role:super'])->group(function () {
    Route::get('/super/dashboard', [SuperController::class, 'SuperDashboard'])->name('super.dashboard');

    Route::get('/super/logout', [SuperController::class, 'SuperLogout'])->name('super.logout');
    Route::get('/super/profile', [SuperController::class, 'SuperProfile'])->name('super.profile');
    Route::post('/super/profile/store', [SuperController::class, 'SuperProfileStore'])->name('super.profile.store');

    Route::get('/super/change/password', [SuperController::class, 'SuperChangePassword'])->name('super.change.password');
    Route::post('/super/password/update', [SuperController::class, 'SuperPasswordUpdate'])->name('super.password.update');
});

Route::get('/super/login', [SuperController::class, 'SuperLogin'])->name('super.login')->middleware(RedirectIfAuthenticated::class);


///// Admin Group Middleware
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});
