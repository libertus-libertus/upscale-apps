<?php

use App\Http\Controllers\HomePage;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Landing Page */ 
Route::get('/', [HomePage::class, 'home'])->name('home');
Route::get('/for-business', [HomePage::class, 'business'])->name('business');
Route::get('/for-talent', [HomePage::class, 'talent'])->name('talent');
Route::get('/jobs', [HomePage::class, 'jobs'])->name('jobs');
Route::get('/faq', [HomePage::class, 'faq'])->name('faq');

Route::middleware(['auth', 'verified'])->group(function () {
    /* dashboard */
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
