<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Models\category;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::delete('/user.destroy/{id}', [HomeController::class, 'destroy'])->name('user.destroy');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register/store', [AuthController::class, 'registerstore'])->name('register.store');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login/store', [AuthController::class, 'loginstore'])->name('login.store');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('category/add', [CategoryController::class, 'create'])->name('category.add');
Route::post('/category/store', [categoryController::class, 'store'])->name('category.store');
Route::get('category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('article/add', [ArticleController::class, 'create'])->name('article.add');
Route::post('article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('article/show/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/dashboard', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profiles.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/roles', [RoleController::class, 'index'])->name('roles');

Route::post('comment.store/{id}', [CommentController::class, 'store'])->name('comment.store');
require __DIR__ . '/auth.php';
