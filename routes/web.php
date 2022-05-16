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

/*
|--------------------------------------------------------------------------
| Public routes
|--------------------------------------------------------------------------
|
| Here is where all the public-facing routes can be registered.
|
*/

Route::get('/', function(){return view('web.home');})->name('home');
Route::get('/about', function(){return view('web.about');})->name('about');
Route::get('/team', function(){return view('web.team');})->name('team');
Route::get('/media', [App\Http\Controllers\ArticleController::class, 'index'])->name('media');
Route::get('/media/{article}', [App\Http\Controllers\ArticleController::class, 'show'])->name('article.view');
Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('events');
Route::get('/get-involved', function(){return view('web.get-involved');})->name('get-involved');
Route::get('/contact', function(){return view('web.contact');})->name('contact');
Route::get('/sponsors', \App\Http\Livewire\Web\Sponsors\Index::class)->name('sponsors');


/*
|--------------------------------------------------------------------------
| Protected routes
|--------------------------------------------------------------------------
|
| Here is where all the administration routes are registered
|
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('admin/team', \App\Http\Livewire\Admin\Team\Index::class)->name('admin.team');
    Route::get('admin/events', \App\Http\Livewire\Admin\Events\Index::class)->name('admin.events');
    Route::get('admin/articles', \App\Http\Livewire\Admin\Articles\Index::class)->name('admin.articles');
    Route::get('admin/articles/create', \App\Http\Livewire\Admin\Articles\Create::class)->name('admin.articles.create');
    Route::get('admin/articles/{article}/edit', \App\Http\Livewire\Admin\Articles\Edit::class)->name('admin.articles.edit');
    Route::get('admin/sponsors', \App\Http\Livewire\Admin\Sponsors\Index::class)->name('admin.sponsors');
});
