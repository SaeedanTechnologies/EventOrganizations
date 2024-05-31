<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\{AdminController};

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
    return view('backend.admin.dashboard');
});

Route::get('/login',          [AdminController::class, 'login_view'])->name('login');
Route::post('/login',          [AdminController::class, 'login'])->name('login');

/* admin routes */
Route::middleware(['auth', 'role:admin'])->prefix('admin')->as('admin.')->group(function () {

    Route::get('/dashboard',  [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',     [AdminController::class, 'logout'])->name('logout');
});


/* organizer routes */
Route::middleware(['auth', 'role:organizer'])->prefix('organizer')->as('organizer.')->group(function () {

    Route::get('/dashboard',  [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',     [AuthController::class, 'logout'])->name('logout');
});


/* user routes */
Route::middleware(['auth', 'role:user'])->prefix('user')->as('user.')->group(function () {

    Route::get('/dashboard',  [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',     [AuthController::class, 'logout'])->name('logout');
});
