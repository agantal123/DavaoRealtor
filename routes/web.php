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
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


 Route::get('/profile', function () {
     return Inertia::render('Dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

 Route::get('/profile/manage-profile', function () {
    return Inertia::render('dashboardpages/manageprofile');
})->middleware(['auth', 'verified'])->name('manageprofile');

Route::get('/profile/topics', function () {
    return Inertia::render('dashboardpages/usertopics');
})->middleware(['auth', 'verified'])->name('usertopics');

Route::get('/profile/listings', function () {
    return Inertia::render('dashboardpages/userlistings');
})->middleware(['auth', 'verified'])->name('userlistings');

Route::get('/profile/supervising', function () {
    return Inertia::render('dashboardpages/user_supervising');
})->middleware(['auth', 'verified'])->name('user_supervising');

 Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/topics', function () {
    return Inertia::render('topics');
})->name('topics');

Route::get('/topics/Land-Use-and-Property-Rights/topic1', function () {
    return Inertia::render('topicpage');
})->name('topicpage');

Route::get('/listings', function () {
    return Inertia::render('listings');
})->name('listings');

Route::get('/listings/house-&-lot/listing1', function () {
    return Inertia::render('listingpage');
})->name('listingpage');

Route::get('/aboutus', function () {
    return Inertia::render('aboutus');
})->name('aboutus');

Route::get('/membership', function () {
    return Inertia::render('membership');
})->name('membership');

Route::get('/membership/john-doe', function () {
    return Inertia::render('memberpage');
})->name('memberpage');

Route::get('/NewsAndEvents', function () {
    return Inertia::render('NewsAndEvents');
})->name('NewsAndEvents');

Route::get('/NewsAndEvents/Rise-of-Tailwind', function () {
    return Inertia::render('newspage');
})->name('newspage');

Route::get('/NewsAndEvents/event1', function () {
    return Inertia::render('eventpage');
})->name('eventpage');




require __DIR__.'/auth.php';
