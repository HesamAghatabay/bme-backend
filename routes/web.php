<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('add-article', [HomeController::class, 'addarticle'])->name('add-article');
Route::get('add-category', [HomeController::class, 'addcategory'])->name('add-category');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register-store', [AuthController::class, 'registerstore'])->name('register-store');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login-store', [AuthController::class, 'loginstore'])->name('login-store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
