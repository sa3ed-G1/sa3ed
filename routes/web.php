<?php

use App\Models\Eventt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Console\Scheduling\Event;
use App\Http\Controllers\EventtController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\UserAdminController;

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
// main pages ------------------------------------------------
// home

Route::get('/', function () {
    $homeEvent = Eventt::latest()->take(3)->get();
    return view('index')->with('threeEvent', $homeEvent);
});
// about
Route::get('/about', function () {
    return view('about');
});
// contact page
Route::get('/contact', function () {
    return view('contact');
});
// events page
Route::get('/events', [EventtController::class, 'showAll']);
// single event page
Route::get('/single-event/{id}', [EventtController::class, 'show_event']);



// main pages ------------------------------------------------
Route::get('/register', [UserController::class, 'create']);
Route::post('/signup', [UserController::class, 'store']);

Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/dashboard', [UserAdminController::class, 'viewDash']);

Route::get('/test', function () {
    return view('test');
});
// google---------------------------
// Redirect to Google Sign in
Route::get('/redirect', [UserController::class, 'redirectToGoogle']);

// Google Callback
Route::get('/callback', [UserController::class, 'handleGoogleCallback']);
// google---------------------------
//github
Route::get('/sign_in/github', [UserController::class, 'github']);
Route::get('/sign_in/github/redirect', [UserController::class, 'githubRedirect']);

Route::resource('/dashboard/events', EventtController::class);
Route::get('/dashboard/events/delete/{id}', [EventtController::class, 'destroy']);

Route::resource('/dashboard/pendings', PendingController::class);
Route::get('/dashboard/events/unassign/{id}', [PendingController::class, 'unassign']);
Route::resource('/dashboard/donations', DonationController::class);

Route::resource('/profile', ManagerController::class);

//Route for the adminDashboard with gate only for the role admin
// Route::get('/dashboard', [App\Http\Controllers\AuthorizationController::class, 'index'])->name('index')->middleware('can:isAdmin');
// =====NEED A DASHBOARD==== tested done*