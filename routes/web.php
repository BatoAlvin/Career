<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ApplicationsController;
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
Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')
->middleware('auth');

Route::get('/dashboard', [JobsController::class, 'display'])->name('dashboard')
->middleware('auth');



Route::get('/details/{id}', [JobsController::class, 'edit'])
->middleware('auth');

Route::post('/delete/{id}', [JobsController::class, 'delete'])
->middleware('auth');

Route::get('/delete/{id}', [JobsController::class, 'delete'])
->middleware('auth');


Route::get('/postjob', [JobsController::class, 'doctorsform'])->name('postjob')
->middleware('auth');

Route::post('/postjob', [JobsController::class, 'store'])->name('postjob')
->middleware('auth');

Route::get('/jobapplication', [JobsController::class, 'displayjobform'])->name('jobapplication')
->middleware('auth');


Route::post('/jobapplication', [ApplicationsController::class, 'store'])->name('jobapplication')
->middleware('auth');

Route::get('/searchjobs', [JobsController::class, 'searchjob'])->name('searchjobs')
->middleware('auth');

Route::get('/applicationslist', [ApplicationsController::class, 'displayformlist'])->name('applicationslist')
->middleware('auth');

Route::get('/applications/{id}', [ApplicationsController::class, 'edit'])
->middleware('auth');

Route::get('/users', [UsersController::class, 'index'])->name('users')
->middleware('auth');

Route::get('/searchapplications', [ApplicationsController::class, 'search'])->name('searchapplications')
->middleware('auth');


Route::get('/profile', [ProfileController::class, 'index'])->name('profile')
->middleware('auth');

require __DIR__.'/auth.php';