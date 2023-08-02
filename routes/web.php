<?php

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
require __DIR__.'/auth.php';

Route::view('/', 'auth.login')->name('main');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'home')->name('dashboard');
    
    Route::prefix('/profile')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('/contacts')->group(function () {
        Route::get('/', [ContactsController::class, 'index'])->name('contacts.index');
        Route::get('/create', [ContactsController::class, 'create'])->name('contacts.create');
        Route::post('/', [ContactsController::class, 'store'])->name('contacts.store');
        Route::get('/{contact}', [ContactsController::class, 'show'])->name('contacts.show');
        Route::get('/{contact}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
        Route::put('/{contact}', [ContactsController::class, 'update'])->name('contacts.update');
        Route::delete('/{contact}', [ContactsController::class, 'destroy'])->name('contacts.destroy');
        Route::put('/{contact}/approve', [ContactsController::class, 'approveStatus'])->name('contacts.approve');
    });
});
