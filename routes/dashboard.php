<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAdminController;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('dashboard/users', [UserAdminController::class, 'index']);

Route::post('dashboard/users', [UserAdminController::class, 'store']);

Route::get('editUser/{id}', [UserAdminController::class, 'show']);

Route::post('editUser/{id}', [UserAdminController::class, 'edit']);

Route::post('/donation/{id}', [UserAdminController::class, 'donate']);

Route::post('/volunteer/{id}', [UserAdminController::class, 'volunteer']);
