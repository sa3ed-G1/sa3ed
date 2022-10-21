<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
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
Route::get('/events', function () {
    return view('events');
});
// single event page
Route::get('/single-event/{id}', ['Eve>>>>']);



// main pages ------------------------------------------------
Route::get('/register', [UserController::class, 'create']);
Route::post('/signup', [UserController::class, 'store']);

Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/dashboard/events', function () {
    return view('dashboard.events');
});
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



//Route for the adminDashboard with gate only for the role admin
// Route::get('/dashboard', [App\Http\Controllers\AuthorizationController::class, 'index'])->name('index')->middleware('can:isAdmin');
// =====NEED A DASHBOARD==== tested done*