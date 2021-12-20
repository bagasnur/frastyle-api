<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VersionController;
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
    return view('home');
});

Route::get('/reset-password', function () {
    return view('auth.password-reset');
});

Route::group(['middleware' => 'auth'], function () {
    Route::redirect('/dashboard', '/dashboard/konten')->name('dashboard');
});


Route::prefix('dashboard')->group(function () {
    Route::group(['middleware' => 'auth'], function () {

        // Konten
        Route::get('/konten', [ContentController::class, 'index'])->name('konten');
        // Tambah Konten
        Route::get('/konten/baru', [ContentController::class, 'add'])->name('konten.create');
        Route::post('/konten/tambah', [ContentController::class, 'store'])->name('konten.store');
        // Edit Konten
        Route::get('/konten/sunting/{id}', [ContentController::class, 'edit'])->name('konten.edit');
        Route::put('/konten/sunting/{id}/ubah', [ContentController::class, 'update'])->name('konten.update');
        // Hapus Konten
        Route::delete('/konten/{id}/hapus', [ContentController::class, 'destroy'])->name('konten.destroy');

        // Kategori
        Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori');
        // Tambah Kategori
        Route::get('/kategori/baru', function () {
            return view('dashboard.kategori.create');
        })->name('kategori.create');
        Route::post('/kategori/tambah', [CategoryController::class, 'store'])->name('kategori.store');
        // Edit Kategori
        Route::get('/kategori/sunting/{id}', [CategoryController::class, 'edit'])->name('kategori.edit');
        Route::put('/kategori/sunting/{id}/ubah', [CategoryController::class, 'update'])->name('kategori.update');
        // Hapus Kategori
        Route::delete('/kategori/{id}/hapus', [CategoryController::class, 'destroy'])->name('kategori.destroy');

        // Label
        Route::get('/label', [TagController::class, 'index'])->name('label');
        // Tambah Label
        Route::get('/label/baru', function () {
            return view('dashboard.label.create');
        })->name('label.create');
        Route::post('/label/tambah', [TagController::class, 'store'])->name('label.store');
        // Edit Label
        Route::get('/label/sunting/{id}', [TagController::class, 'edit'])->name('label.edit');
        Route::put('/label/sunting/{id}/ubah', [TagController::class, 'update'])->name('label.update');
        // Hapus Label
        Route::delete('/label/{id}/hapus', [TagController::class, 'destroy'])->name('label.destroy');

        // Versi
        Route::get('/versi', [VersionController::class, 'index'])->name('versi');
        // Tambah Versi
        Route::get('/versi/baru', function () {
            return view('dashboard.versi.create');
        })->name('versi.create');
        Route::post('/versi/tambah', [VersionController::class, 'store'])->name('versi.store');
        // Edit Versi
        Route::get('/versi/sunting/{id}', [VersionController::class, 'edit'])->name('versi.edit');
        Route::put('/versi/sunting/{id}/ubah', [VersionController::class, 'update'])->name('versi.update');
        // Hapus Versi
        Route::delete('/versi/{id}/hapus', [VersionController::class, 'destroy'])->name('versi.destroy');
    });
});