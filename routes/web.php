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

Route::get('/', [App\Http\Controllers\Frontend\Pages\AllPagesController::class, 'welcome'])->name('welcome');

Route::get('/about', [App\Http\Controllers\Frontend\Pages\AllPagesController::class, 'about'])->name('about');

Route::get('/blog', [App\Http\Controllers\Frontend\Pages\AllPagesController::class, 'blog'])->name('blog');

Route::get('/blog-details/{id}', [App\Http\Controllers\Frontend\Pages\AllPagesController::class, 'blog_details'])->name('blog.details');

Route::get('/contact', [App\Http\Controllers\Frontend\Pages\AllPagesController::class, 'contact'])->name('contact');

Route::get('/portfolio', [App\Http\Controllers\Frontend\Pages\AllPagesController::class, 'portfolio'])->name('portfolio');

Route::get('/service', [App\Http\Controllers\Frontend\Pages\AllPagesController::class, 'service'])->name('service');


