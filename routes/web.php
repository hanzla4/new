<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\ProductController;
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



Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('roles', [RolePermissionController::class, 'index'])->name('roles.index');
    Route::get('roles/create', [RolePermissionController::class, 'create'])->name('roles.create');
    Route::post('roles', [RolePermissionController::class, 'store'])->name('roles.store');

    Route::get('permissions', [RolePermissionController::class, 'showPermissions'])->name('permissions.index');
    Route::post('permissions', [RolePermissionController::class, 'storePermission'])->name('permissions.store');

    Route::post('assign-role', [RolePermissionController::class, 'assignRoleToUser'])->name('assignRoleToUser');
});


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Custom route for adding a new user
Route::get('/add-user', [UserController::class, 'addUserPage'])->name('adduser');



Route::resource('users', UserController::class);
Route::get('/edit-user', [UserController::class, 'editUserView']);
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');



Route::resource('dashboard', DashboardController::class)->only(['index']);



Route::get('/products', [ProductController::class, 'showProductList'])->name('products.list');
Route::get('/Addproducts', [ProductController::class, 'addProduct'])->name('products.AddProduct');
Route::get('/ProductsReports', [ProductController::class, 'ProductsReports'])->name('products.ProductReports');
require __DIR__.'/auth.php';
