<?php

use App\Http\Controllers\SinglePageController;

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('website.blog.index');
// });

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
// Route::resource('/posts', [App\Http\Controllers\PostsController::class]);
// Route::resource('/categories', [App\Http\Controllers\CategoryController::class]);
// Route::resource('/tags', [App\Http\Controllers\TagController::class]);
// Route::resource('/pages', [App\Http\Controllers\PageController::class]);
// Route::resource('/navbar', [App\Http\Controllers\NavbarLinkController::class]);
// Route::get('/{Slug}', [SinglePageController::class, 'getPage']);
// Route::resource('/home', [App\Http\Controllers\WebsiteController::class]);





Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('categories', 'App\Http\Controllers\CategoryController');
Route::resource('tags', 'App\Http\Controllers\TagController');
Route::resource('pages', 'App\Http\Controllers\PageController');

Route::resource('navbar', 'App\Http\Controllers\NavbarLinkController');

Route::get('/{Slug}', [SinglePageController::class, 'getPage']);

Route::resource('/home', 'App\Http\Controllers\WebsiteController');

