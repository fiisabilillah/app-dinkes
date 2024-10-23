<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\indexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [indexController::class, 'Index'])->name('index');

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
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login')->middleware(RedirectIfAuthenticated::class);
Route::get('/login', [UserController::class, 'UserLogin'])->name('login')->middleware(RedirectIfAuthenticated::class);


///// Admin Group Middleware
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');
});

///// Users Group Middleware
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('frontend.dashboard');

    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('user.profile');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');

    Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
    Route::post('/user/password/update', [UserController::class, 'UserPasswordUpdate'])->name('user.password.update');
});
