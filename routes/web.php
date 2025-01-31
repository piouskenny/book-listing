<?php

use App\Http\Controllers\BookSeller\BookSellerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/book/{id}', [HomeController::class, 'show'])->name('book.show');

Route::get('/dashboard',[BookSellerController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Books Controller
    Route::get('/create', [BookSellerController::class, 'create'])->name('book.create');
    Route::post('/store', [BookSellerController::class, 'store'])->name('book.store');
});

require __DIR__ . '/auth.php';
