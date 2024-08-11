<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/users', UserController::class)->parameters([
    'users' => 'user:slug'
]);
Route::patch('/users/suspension/{user:slug}', [UserController::class,'suspension'])->name('sus');
Route::resource('/categories', CategoryController::class)->parameters([
    'categories' => 'category:slug'
]);
Route::resource('/sellers', SellerController::class);
Route::patch('/sellers/suspension/{seller:slug}', [SellerController::class,'suspension'])->name('susSeller');

Route::resource('/products', ProductController::class);

// Route::resource('/banks', BankController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
