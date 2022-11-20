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

Route::post('/signin',  ['App\Http\Controllers\PagesController','signin'])->name('signin');
Route::post('/signup',  ['App\Http\Controllers\UserAccountController','signup'])->name('signup');

Route::get('/', ['App\Http\Controllers\PagesController','home']);
Route::get('/about',  ['App\Http\Controllers\PagesController','about'])->name('about');
Route::get('/dash',  ['App\Http\Controllers\PagesController','dash'])->name('dash')->middleware(['auth','user']);
Route::get('/blog',  ['App\Http\Controllers\PagesController','blog']);
Route::get('/pricing',  ['App\Http\Controllers\PagesController','pricing'])->middleware('auth');
Route::get('/payment',  ['App\Http\Controllers\PagesController','payment'])->middleware('auth');
Route::get('/add-info/{id}',  ['App\Http\Controllers\PagesController','addinfo'])->middleware('auth');
Route::get('/contact',  ['App\Http\Controllers\PagesController','contact']);
Route::get('/listing',  ['App\Http\Controllers\PagesController','listing']);
Route::get('/listings-grid',  ['App\Http\Controllers\PagesController','listinggrid']);
Route::get('/listing-details/1',  ['App\Http\Controllers\PagesController','listingdetail']);
Route::get('/blog-details/1',  ['App\Http\Controllers\PagesController','blogdetail']);
Route::get('/event',  ['App\Http\Controllers\PagesController','event']);
Route::get('/ethiopia',  ['App\Http\Controllers\PagesController','ethiopia']);
Route::get('/admin/dashboard',  ['App\Http\Controllers\PagesController','adminDashboard'])->name('admindashboard')->middleware('admin');

 Route::post('/login-custom', ['App\Http\Controllers\UserAccountController','login'])->name('login-custom');


Route::get('/admin/user',  ['App\Http\Controllers\UserAccountController','manageuser'])->name('manageuser')->middleware('admin');
Route::get('/admin/company',  ['App\Http\Controllers\CompanyController','managecompany'])->name('managecompany')->middleware('admin');
Route::get('/admin/books',  ['App\Http\Controllers\CompanyController','managebooks'])->name('managebook')->middleware('admin');
Route::get('/admin/blog',  ['App\Http\Controllers\CompanyController','manageblog'])->name('manageblog')->middleware('admin');
Route::get('/admin/event',  ['App\Http\Controllers\CompanyController','manageevent'])->name('manageevent')->middleware('admin');
Route::get('/admin/add-user',  ['App\Http\Controllers\UserAccountController','adduser'])->name('adduser')->middleware('admin');
Route::get('/admin/add-company',  ['App\Http\Controllers\CompanyController','addcompany'])->name('admin-add-company')->middleware('admin');
Route::get('/admin/add-blog',  ['App\Http\Controllers\CompanyController','addblog'])->name('add-blog')->middleware('admin');
Route::get('/admin/add-book',  ['App\Http\Controllers\CompanyController','addbook'])->name('add-book')->middleware('admin');
Route::get('/admin/add-event',  ['App\Http\Controllers\EventController','addevent'])->name('add-event')->middleware('admin');

Route::post('/admin/save-company', ['App\Http\Controllers\CompanyController','savecompany'])->name('save-company');
Route::post('/admin/save-blog', ['App\Http\Controllers\BlogController','saveblog'])->name('save-blog');
Route::post('/admin/save-book', ['App\Http\Controllers\BookController','savebook'])->name('save-book');
Route::post('/admin/save-event', ['App\Http\Controllers\EventController','saveevent'])->name('save-event');
Route::post('/check-pricing', ['App\Http\Controllers\CompanyController','checkpricing'])->name('check-pricing');

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
