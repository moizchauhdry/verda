<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('pages.about');
Route::get('/projects', [HomeController::class, 'projects'])->name('pages.projects');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('pages.blogs');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('pages.contact');
