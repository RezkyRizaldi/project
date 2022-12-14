<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/archives/{archive}', [ArchiveController::class, 'show'])->name('archives.show');
Route::resource('categories', CategoryController::class)->only(['show']);
Route::resource('authors', AuthorController::class)->only(['show']);
Route::resource('posts', PostController::class)->only(['show']);
Route::resource('comments', CommentController::class)->only(['store']);
