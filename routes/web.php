<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('/services/Isocompta', [ServiceController::class, 'isocompta'])->name('services.isocompta');