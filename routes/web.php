<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () { 
    Route::get('/warga', [AdminController::class, 'indexWarga']);
    Route::get('/berita', [AdminController::class, 'indexBerita']);
    Route::get('/warga/create', [AdminController::class, 'createWarga']);
    Route::get('/berita/create', [AdminController::class, 'createBerita']);
    Route::get('/warga/edit/{id}', [AdminController::class, 'editWarga']);
    Route::get('/berita/edit/{id}', [AdminController::class, 'editBerita']);
    Route::post('/warga/edit-store/{id}', [AdminController::class, 'storeEditWarga']);
    Route::post('/berita/edit-store/{id}', [AdminController::class, 'storeEditBerita']);
    Route::post('/warga/store', [AdminController::class, 'storeWarga']);
    Route::post('/berita/store', [AdminController::class, 'storeBerita']);
    Route::get('/warga/delete/{id}', [AdminController::class, 'deleteWarga']);
    Route::get('/berita/delete/{id}', [AdminController::class, 'deleteBerita']);

    // Route::get('/program', [AdminController::class, 'indexProgram']);
    // Route::get('/berita/create', [AdminController::class, 'createBerita']);
    // Route::post('/berita/store', [AdminController::class, 'storeBerita']);
    // Route::get('/berita/edit/{id}', [AdminController::class, 'editBerita']);
    // Route::post('/berita/edit-store/{id}', [AdminController::class, 'storeEditBerita']);
    // Route::get('/berita/delete/{id}', [AdminController::class, 'deleteBerita']);
});
Route::get('/cek-nik', [WargaController::class, 'index']);
Route::post('/cek-nik-store', [WargaController::class, 'checkNIK']);