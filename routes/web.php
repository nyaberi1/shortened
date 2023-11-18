<?php

use App\Http\Controllers\ShortendUrlController;
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

Route::get('/', [ShortendUrlController::class, 'create'])->name('shortend.create');
Route::post('/shortendurl', [ShortendUrlController::class, 'store'])->name('shortend.store');
Route::get('/{slug}', [ShortendUrlController::class, 'show'])->name('shortend.slug');
Route::get('/edit/{slug}', [ShortendUrlController::class, 'edit'])->name('shortend.edit');
