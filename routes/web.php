<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/About', function () {
    return Inertia::render('About');
});
Route::get('/Donate', function () {
    return Inertia::render('Donate');
});

Route::middleware('auth')->group(function () {
    Route::get('/Programes/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/Programes/create', [EventController::class, 'store'])->name('event.store');
    Route::post('uploads/process', [UploadController::class, 'process'])->name('uploads.process');
    Route::post('uploads/save', [UploadController::class, 'save'])->name('uploads.save');
    Route::get('/Programes/edit/{event}', [EventController::class, 'edit'])->name('event.edit');
    Route::patch('/Programes/update/{event}', [EventController::class, 'update'])->name('event.update');
    Route::delete('/Programes/edit{event}', [EventController::class, 'destroy'])->name('event.delete');
});

Route::get('/Programes/index', [EventController::class, 'index'])->name('event.index');
Route::get('/Programes/{event}', [EventController::class, 'show'])->name('event.show');
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
