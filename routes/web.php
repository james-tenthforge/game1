<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/user/my-profile', function () {
    return Inertia::render('User/PrivateProfile');
})->middleware(['auth'])->name('private-profile');

Route::get('/user/{userId}', function () {
    return Inertia::render('User/PublicProfile');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/game', function () {
    return Inertia::render('Game/Main');
})->name('game');

require __DIR__.'/auth.php';
