<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Models\category;
use App\Models\view;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/all.articles', [HomeController::class, 'allarticles'])->name('all.articles');
// Route::get()
Route::get('/best-articles', [HomeController::class, 'bestarticles'])->name('best-articles');
Route::get('/lastest-articles', [HomeController::class, 'lastestarticles'])->name('lastest-articles');
Route::get('/client.add', [HomeController::class, 'create'])->name('client.add');
Route::post('/client.store', [HomeController::class, 'store'])->name('client.store');
Route::delete('/client.destroy/{id}', [HomeController::class, 'destroy'])->name('client.destroy');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register/store', [AuthController::class, 'registerstore'])->name('register.store');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login/store', [AuthController::class, 'loginstore'])->name('login.store');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot.password', [NewPasswordController::class, 'create'])->name('forgot.password');
Route::post('/forgot.password.store', [NewPasswordController::class, 'store'])->name('forgot.password.store');
Route::get('/password.edit', [NewPasswordController::class, 'edit'])->name('password.edit');
Route::put('/password.update/{id}', [NewPasswordController::class, 'update'])->name('password.update');

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
Route::get('/role.add', [RoleController::class, 'create'])->name('role.add');
Route::post('/role.store', [RoleController::class, 'store'])->name('role.store');
Route::get('/role.edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role.update/{id}', [RoleController::class, 'update'])->name('role.update');

Route::post('comment.store/{id}', [CommentController::class, 'store'])->name('comment.store');
require __DIR__ . '/auth.php';
