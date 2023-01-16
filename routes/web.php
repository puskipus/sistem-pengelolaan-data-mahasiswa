<?php

use App\Http\Controllers\DeleteMahasiswaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\showTambahMahasiswa;
use App\Http\Controllers\storeNewMahasiswa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', MahasiswaController::class)->middleware(['auth'])->name('dashboard');
Route::get('/tambah', showTambahMahasiswa::class)->middleware(['auth']);
Route::post('/tambah', storeNewMahasiswa::class)->middleware(['auth']);
Route::delete('/delete/{mahasiswa}', DeleteMahasiswaController::class)->middleware(['auth']);


// Route::resource('mahasiswa', MahasiswaController::class)->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
