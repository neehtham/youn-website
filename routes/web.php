<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('web/Welcome', [
        'appName' => 'Youth Union',
        'events' => [],
    ]);
});

Route::get('/About', function () {
    return Inertia::render('web/About');
});
Route::get('/Donate', function () {
    return Inertia::render('web/Donate');
});


// Route::get('/dashboard', function () {
//     return Inertia::render('portal/Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profiles', [ProfileController::class, 'show'])->name('profile.show');
});


require __DIR__ . '/auth.php';
