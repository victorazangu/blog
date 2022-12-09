<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
//     return view('welcome');
// });


// To about page
Route::get('/about', function(){
    return view('about');
})->name('about');

// Using controller

// To welcome page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

// To blog page
Route::get('/blog', [PostController::class, 'index'])->name('post.index');

// To create blog post
Route::get('/blog/create', [PostController::class, 'create'])->name('post.create');

// To single blog post
Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('post.show');


// To edit single blog post
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

// To update single blog post
Route::put('/blog/{post}', [PostController::class, 'update'])->name('post.update');

// To delete single blog post
Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('post.destroy');

// To store blog post to the DB
Route::post('/blog', [PostController::class, 'store'])->name('post.store');

// To about page
Route::get('/about', function(){
    return view('about');
})->name('about');

// To contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// To Send data to email.
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Category resource controller
// Route::resource('/categories', CategoryController::class);

// The resource controller above under the hood.

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__.'/auth.php';
