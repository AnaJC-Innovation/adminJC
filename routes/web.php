<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradoresController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/elearning', function () {
    return view('elearning.dashboard');
})->middleware(['auth', 'verified'])->name('elearning.dashboard');

Route::get('/web', function () {
    return view('web.dashboard');
})->middleware(['auth', 'verified'])->name('web.dashboard');

Route::get('/administradores/data', [AdministradoresController::class, 'data'])
    ->name('administradores.data');

Route::post('/administradores/Guardar', [AdministradoresController::class, 'Guardar'])
    ->name('administradores.Guardar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile.dashboard');
    })->name('profile.dashboard');
    Route::post('/profile/updatesave', [ProfileController::class, 'updatesave'])->name('profile.updatesave');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
