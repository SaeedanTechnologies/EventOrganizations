<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\{
    AdminController, 
    OrganizerController, 
    UserController,
    EventController,
    SubscriberController};
use App\Http\Controllers\Backend\Organizer\{
    OrganizerController as UserOrganizer,
    EventController as EventOrganizer,
    SpecialOfferController
    };
use App\Http\Controllers\Frontend\{
    HomeController,
    UserController as FrontendUserController
    };
use App\Http\Controllers\BookingController;



Route::get('/login',           [AdminController::class, 'login_view'])->name('login_view');
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
    /* user subscriber and newsletter route */
    Route::get('/all_subscribers',       [SubscriberController::class, 'all_subscriber'])->name('all_subscriber');
    Route::get('/send/newsletter',       [SubscriberController::class, 'newsletter'])->name('newsletter');
    Route::post('/send/newsletter',      [SubscriberController::class, 'send_newsletter'])->name('send_newsletter');
    /* booking route */
    Route::get('/all_booking',           [BookingController::class, 'all_booking'])->name('all_booking');
});


Route::get('organizer/register',         [UserOrganizer::class, 'register_view'])->name('organizer.register_view');
Route::post('organizer/register',        [UserOrganizer::class, 'register'])->name('organizer.register');
/* organizer routes */
Route::middleware(['auth', 'role:organizer'])->prefix('organizer')->as('organizer.')->group(function () {

    Route::get('/dashboard',            [UserOrganizer::class, 'dashboard'])->name('dashboard');
    Route::get('/profile',              [UserOrganizer::class, 'profile'])->name('profile');
    Route::post('/update-profile/{id}', [UserOrganizer::class, 'update_profile'])->name('update_profile');
    Route::get('/logout',               [UserOrganizer::class, 'logout'])->name('logout');
    /* events and special offers routes */
    Route::resource('events',           EventOrganizer::class);
    Route::resource('special_offers',   SpecialOfferController::class);
    /* booking route */
    Route::get('/all_booking',           [BookingController::class, 'organizer_booking'])->name('organizer_booking');
});


/* user routes */
Route::middleware(['auth', 'role:user'])->prefix('user')->as('user.')->group(function () {

    Route::get('/dashboard',            [FrontendUserController::class, 'dashboard'])->name('dashboard');
    Route::get('/booking/{event_id}',   [HomeController::class, 'booking'])->name('booking');
    Route::get('/logout',               [FrontendUserController::class, 'logout'])->name('logout');
});

/*frontend and user subscriber for newsletter route */
Route::post('subscribe', [SubscriberController::class, 'subscribe'])->name('save_subscriber');
Route::get('/',          [HomeController::class, 'home'])->name('home');
Route::get('/about-us',  [HomeController::class, 'about'])->name('about');
Route::get('/contact-us',[HomeController::class, 'contact'])->name('contact');
Route::get('/events',    [HomeController::class, 'events'])->name('events');
Route::get('/event/detail/{event_id}',    [HomeController::class, 'event_detail'])->name('events.detail');

/* user authentication routes */
Route::get('/user/register',    [FrontendUserController::class, 'register_view'])->name('register_view');
Route::post('/user/register',   [FrontendUserController::class, 'register'])->name('register');
Route::get('/user/login',       [FrontendUserController::class, 'login_view'])->name('login_view');
Route::post('/user/login',      [FrontendUserController::class, 'login'])->name('user_login');

