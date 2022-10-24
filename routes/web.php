<?php

use App\Models\User;
use App\Models\Offer;
use App\Models\Eventt;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Console\Scheduling\Event;
use App\Http\Controllers\EventtController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\UserAdminController;
use App\Models\Donation;
use App\Models\Volunteer;
use Illuminate\Routing\RouteBinding;

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
    $numberOfProjects = Eventt::count('id');
    $activeVolanteers = Volunteer::count('id');
    $totalDonation = Donation::sum('amount');
    // dd($totalDonation);

    $homeEvent = Eventt::latest()->take(3)->get();
    return view('index')->with(['threeEvent' => $homeEvent, 
                                'numberofprojects' => $numberOfProjects, 
                                'numberofvolenteers'=> $activeVolanteers,
                                 'totaldonations' => $totalDonation]);
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

Route::get('/offers', function () {
    $offers = Offer::all();
    return view('point', ['offers' => $offers]);
})->middleware('auth');

// main pages ------------------------------------------------
Route::get('/register', [UserController::class, 'create'])->name('login');
Route::post('/signup', [UserController::class, 'store']);

Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);



// google---------------------------
// Redirect to Google Sign in
Route::get('/redirect', [UserController::class, 'redirectToGoogle']);

// Google Callback
Route::get('/callback', [UserController::class, 'handleGoogleCallback']);
// google---------------------------
//github
Route::get('/sign_in/github', [UserController::class, 'github']);
Route::get('/sign_in/github/redirect', [UserController::class, 'githubRedirect']);



Route::resource('/profile', ManagerController::class);

//Route for the adminDashboard with gate only for the role admin
// Route::get('/dashboard', [App\Http\Controllers\AuthorizationController::class, 'index'])->name('index')->middleware('can:isAdmin');
// =====NEED A DASHBOARD==== tested done*
Route::post('/post-comment', [CommentController::class, 'store']);
Route::post('/apply', [ManagerController::class, 'apply'])->middleware("auth");
// update event for manager
Route::post('/manager/update', [ManagerController::class, 'updateEvent']);
// end event for manager
Route::post('/manager/end', [ManagerController::class, 'endEvent']);
// admin Dashboard
Route::middleware(['can:isAdmin'])->group(function () {
    Route::resource('/dashboard/events', EventtController::class);
    Route::get('/dashboard', [UserAdminController::class, 'viewDash']);
    Route::get('/dashboard/events/delete/{id}', [EventtController::class, 'destroy']);
    Route::resource('/dashboard/pendings', PendingController::class);
    Route::resource('/dashboard/donations', DonationController::class);
    Route::get('/dashboard/events/unassign/{id}', [PendingController::class, 'unassign']);
    Route::get('dashboard/users', [UserAdminController::class, 'index']);
    Route::post('dashboard/users', [UserAdminController::class, 'store']);
    Route::get('dashboard/users/delete/{id}', [UserAdminController::class, 'destroy']);
    Route::post('editUser/{id}', [UserAdminController::class, 'edit']);
});
