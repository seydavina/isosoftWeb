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

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('/Isopaie', [ServiceController::class, 'isopaie'])->name('services.isopaie');
Route::get('/Isoimmo', [ServiceController::class, 'isoimmo'])->name('services.isoimmo');
Route::get('/AutresModules', [ServiceController::class, 'autres'])->name('services.autres');
Route::get('/Isobudget', [ServiceController::class, 'isobudget'])->name('services.isobudget');
Route::get('/Isocompta', [ServiceController::class, 'isocompta'])->name('services.isocompta');
Route::get('/Isogescom', [ServiceController::class, 'isogescom'])->name('services.isogescom');
Route::get('/Isoetatfin', [ServiceController::class, 'isoetatfin'])->name('services.isoetatfin');
Route::get('/Isogescole', [ServiceController::class, 'isogescole'])->name('services.isogescole');