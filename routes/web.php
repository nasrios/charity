<?php


use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddelware;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;





Route::get('/', function () {
    return view('index');
})->name('nowhere');


Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'index'])->name('lougout');
Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth','AdminMiddelware');
Route::get('/guest/dashboard', [App\Http\Controllers\GuestController::class, 'dashboard'])->name('guest.dashboard')->middleware('auth');
Route::get('/admin/dashboard/donation', [App\Http\Controllers\DonationController::class, 'index'])->name('donations.index')->middleware('auth','AdminMiddelware');
Route::get('/guests', [App\Http\Controllers\GuestListController::class, 'index'])->name('guests.index')->middleware('auth','AdminMiddelware');
Route::delete('/guests/{guest}', [App\Http\Controllers\GuestListController::class, 'destroy'])->name('guests.destroy')->middleware('auth');
Route::get('/donations/create', [App\Http\Controllers\DonationController::class, 'create'])->name('donations.create')->middleware('auth');
Route::POST('/donations', [App\Http\Controllers\DonationController::class, 'store'])->name('donations.store')->middleware('auth');
Route::get('/guest/dashboard/donations', [App\Http\Controllers\GuestController::class, 'indexDonations'])->name('guest.dashboard.donations.index')->middleware('auth');
Route::get('/contacts/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contacts.create')->middleware('auth');
Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::get  ('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit',[App\Http\Controllers\PostController::class,'edit'])->name('posts.edit')->middleware('auth');
Route::put('/posts/{post}',[App\Http\Controllers\PostController::class,'update'])->name('posts.update')->middleware('auth');

Route::delete('/posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy')->middleware('auth');




