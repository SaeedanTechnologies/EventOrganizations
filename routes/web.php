<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\{
    AdminController, 
    OrganizerController, 
    UserController,
    EventController};
use App\Http\Controllers\Backend\Organizer\{
    OrganizerController as UserOrganizer,
    EventController as EventOrganizer,
    SpecialOfferController
    };



Route::get('/', function () {
    return view('backend.admin.dashboard');
});

Route::get('/login',          [AdminController::class, 'login_view'])->name('login');
Route::post('/login',          [AdminController::class, 'login'])->name('login');

/* admin routes */
Route::middleware(['auth', 'role:admin'])->prefix('admin')->as('admin.')->group(function () {

    Route::get('/dashboard',            [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile',              [AdminController::class, 'profile'])->name('profile');
    Route::post('/update-profile/{id}', [AdminController::class, 'update_profile'])->name('update_profile');
    Route::get('/logout',               [AdminController::class, 'logout'])->name('logout');
    /* organizers, user and events routes */
    Route::resource('organizers',       OrganizerController::class);
    Route::resource('users',            UserController::class);
    Route::resource('events',           EventController::class);
});


/* organizer routes */
Route::middleware(['auth', 'role:organizer'])->prefix('organizer')->as('organizer.')->group(function () {

    Route::get('/dashboard',            [UserOrganizer::class, 'dashboard'])->name('dashboard');
    Route::get('/profile',              [UserOrganizer::class, 'profile'])->name('profile');
    Route::post('/update-profile/{id}', [UserOrganizer::class, 'update_profile'])->name('update_profile');
    Route::get('/logout',               [UserOrganizer::class, 'logout'])->name('logout');
    /* events and special offers routes */
    Route::resource('events',           EventOrganizer::class);
    Route::resource('special_offers',   SpecialOfferController::class);
});


/* user routes */
Route::middleware(['auth', 'role:user'])->prefix('user')->as('user.')->group(function () {

    Route::get('/dashboard',            [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout',               [AuthController::class, 'logout'])->name('logout');
});
