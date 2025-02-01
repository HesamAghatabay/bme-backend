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
use App\Models\User;
use App\Models\view;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/client.add', [HomeController::class, 'create'])->name('client.add');
Route::post('/client.store', [HomeController::class, 'store'])->name('client.store');
Route::delete('/client.destroy/{id}', [HomeController::class, 'destroy'])->name('client.destroy');

Route::get('/all.articles', [HomeController::class, 'allarticles'])->name('all.articles');
Route::get('/best-articles', [HomeController::class, 'bestarticles'])->name('best-articles');
Route::get('/lastest-articles', [HomeController::class, 'lastestarticles'])->name('lastest-articles');

Route::get('/about', function () {
    $readers = Role::findByName('reader')->users;
    return view('about', compact('readers'));
})->name('about');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register/store', [AuthController::class, 'registerstore'])->name('register.store');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login/store', [AuthController::class, 'loginstore'])->name('login.store');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot.password', [NewPasswordController::class, 'create'])->name('forgot.password');
Route::post('/forgot.password.store', [NewPasswordController::class, 'store'])->name('forgot.password.store');
Route::get('/password.edit', [NewPasswordController::class, 'edit'])->name('password.edit');
Route::put('/password.updates/{id}', [NewPasswordController::class, 'update'])->name('password.updates');

Route::resource('category', CategoryController::class);
// Route::get('category/add', [CategoryController::class, 'create'])->name('category.add');
// Route::post('/category/store', [categoryController::class, 'store'])->name('category.store');
// Route::get('category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
// Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
// Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
// Route::delete('category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Route::get('article/add', [ArticleController::class, 'create'])->name('article.add');
// Route::post('article/store', [ArticleController::class, 'store'])->name('article.store');
// Route::get('article/show/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::resource('article', articleController::class);
Route::get('/confirm.article/{id}', [ArticleController::class, 'confirm'])->name('confirm.article');

Route::get('/dashboard', [ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profiles.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/roles', [RoleController::class, 'index'])->name('roles');
Route::get('/setadmin/{id}', [RoleController::class, 'setadmin'])->name('setadmin');
Route::get('/setreader/{id}', [RoleController::class, 'setreader'])->name('setreader');
Route::get('/setuser/{id}', [RoleController::class, 'setuser'])->name('setuser');
// Route::post('/role.store', [RoleController::class, 'store'])->name('role.store');
Route::get('/role.edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
// Route::put('/role.update/{id}', [RoleController::class, 'update'])->name('role.update');

Route::post('comment.store/{id}', [CommentController::class, 'store'])->name('comment.store');
Route::put('/confirm.comments/{id}', [CommentController::class, 'edit'])->name('confirm.comments');
Route::delete('/destroy.comments/{id}', [CommentController::class, 'destroy'])->name('destroy.comments');

Route::get('/permission', function () {
    $role = Role::create(['name' => 'admin']);
    $permission = Permission::create(['name' => 'edit articles']);
});
require __DIR__ . '/auth.php';

Route::get('/assign', function () {
    $user = User::find(1);
    $role1 = Role::find(1);
    // dd($role1);
    $user->assignRole($role1);
    dd('assign is done');
});

Route::get('/spatie', function () {
    $role1 = Role::create(['name' => 'superAdmin']);
    $role2 = Role::create(['name' => 'admin']);
    $role3 = Role::create(['name' => 'reader']);
    $role4 = Role::create(['name' => 'user']);

    $permission1 = Permission::create(['name' => 'create articles']);
    $permission2 = Permission::create(['name' => 'edit articles']);
    $permission3 = Permission::create(['name' => 'update articles']);
    $permission4 = Permission::create(['name' => 'delete articles']);

    $permission5 = Permission::create(['name' => 'create category']);
    $permission6 = Permission::create(['name' => 'edit category']);
    $permission7 = Permission::create(['name' => 'update category']);
    $permission8 = Permission::create(['name' => 'delete category']);

    $permission9 = Permission::create(['name' => 'add admin']);
    $permission10 = Permission::create(['name' => 'remove admin']);

    $permission11 = Permission::create(['name' => 'add reader']);
    $permission12 = Permission::create(['name' => 'remove reader']);

    $permission13 = Permission::create(['name' => 'confirm article']);

    $role1->givePermissionTo($permission1, $permission2, $permission3, $permission4, $permission5, $permission6, $permission7, $permission8, $permission9, $permission10, $permission11, $permission12, $permission13);
    $role2->givePermissionTo($permission1, $permission2, $permission3, $permission4, $permission5, $permission6, $permission7, $permission8, $permission11, $permission12, $permission13);
    $role3->givePermissionTo($permission1, $permission2, $permission3, $permission4, $permission5, $permission6, $permission7, $permission8, $permission13);
    $role4->givePermissionTo($permission1, $permission2, $permission3, $permission4);
    // $user->assignRole($role1);
    dd('spatie is done');
});

Route::get('/other1', function () {
    $permission14 = Permission::create(['name' => 'see roles']);
    $role1 = Role::find(1);
    $role2 = Role::find(2);
    $role1->givePermissionTo($permission14);
    $role2->givePermissionTo($permission14);
    dd('other is done');
});
Route::get('/other2', function () {
    $permission15 = Permission::create(['name' => 'edit roles']);
    $role1 = Role::find(1);
    $role2 = Role::find(2);
    $role1->givePermissionTo($permission15);
    $role2->givePermissionTo($permission15);
    dd('other is done');
});
Route::get('/other3', function () {
    $permission16 = Permission::create(['name' => 'confirm comments']);
    $role1 = Role::find(1);
    $role2 = Role::find(2);
    $role3 = Role::find(3);
    $role1->givePermissionTo($permission16);
    $role2->givePermissionTo($permission16);
    $role3->givePermissionTo($permission16);
    dd('other is done');
});
