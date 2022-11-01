<?php

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

// Route::get('/', function () {
//     return view('pages.listing-detail');
// });

Route::get('/', ['App\Http\Controllers\PagesController','home']);
Route::get('/about',  ['App\Http\Controllers\PagesController','about']);
Route::get('/blog',  ['App\Http\Controllers\PagesController','blog']);
Route::get('/contact',  ['App\Http\Controllers\PagesController','contact']);
Route::get('/listing',  ['App\Http\Controllers\PagesController','listing']);
Route::get('/listings-grid',  ['App\Http\Controllers\PagesController','listinggrid']);
Route::get('/listing-details/1',  ['App\Http\Controllers\PagesController','listingdetail']);
Route::get('/blog-details/1',  ['App\Http\Controllers\PagesController','blogdetail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    // Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
