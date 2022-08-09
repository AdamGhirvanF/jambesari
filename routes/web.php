<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;

Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/check-login', [AuthController::class, 'checkLogin']);
Route::prefix('admin')->middleware('auth')->group(function () { 
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

    Route::get('/program', [AdminController::class, 'indexProgram']);
    Route::get('/program/create', [AdminController::class, 'createProgram']);
    Route::post('/program/store', [AdminController::class, 'storeProgram']);
    Route::get('/program/edit/{id}', [AdminController::class, 'editProgram']);
    Route::post('/program/edit-store/{id}', [AdminController::class, 'storeEditProgram']);
    Route::get('/program/delete/{id}', [AdminController::class, 'deleteProgram']);

    Route::get('/lembaga', [AdminController::class, 'indexLembaga']);
    Route::get('/lembaga/create', [AdminController::class, 'createLembaga']);
    Route::post('/lembaga/store', [AdminController::class, 'storeLembaga']);
    Route::get('/lembaga/edit/{id}', [AdminController::class, 'editLembaga']);
    Route::post('/lembaga/edit-store/{id}', [AdminController::class, 'storeEditLembaga']);
    Route::get('/lembaga/delete/{id}', [AdminController::class, 'deleteLembaga']);

    Route::get('/program-lembaga', [AdminController::class, 'indexProgramLembaga']);
    Route::get('/program-lembaga/create', [AdminController::class, 'createProgramLembaga']);
    Route::post('/program-lembaga/store', [AdminController::class, 'storeProgramLembaga']);
    Route::get('/program-lembaga/edit/{id}', [AdminController::class, 'editProgramLembaga']);
    Route::post('/program-lembaga/edit-store/{id}', [AdminController::class, 'storeEditProgramLembaga']);
    Route::get('/program-lembaga/delete/{id}', [AdminController::class, 'deleteProgramLembaga']);

    Route::get('/galeri', [AdminController::class, 'indexGaleri']);
    Route::get('/galeri/create', [AdminController::class, 'createGaleri']);
    Route::post('/galeri/store', [AdminController::class, 'storeGaleri']);
    Route::get('/galeri/edit/{id}', [AdminController::class, 'editGaleri']);
    Route::post('/galeri/edit-store/{id}', [AdminController::class, 'storeEditGaleri']);
    Route::get('/galeri/delete/{id}', [AdminController::class, 'deleteGaleri']);
});
Route::get('/cek-nik', [WargaController::class, 'index']);
Route::post('/cek-nik-store', [WargaController::class, 'checkNIK']);

Route::get('', [FrontendController::class, 'indexHomepage']);
Route::get('/berita', [FrontendController::class, 'indexBerita']);
Route::get('/berita/{id}', [FrontendController::class, 'isiBerita']);
Route::get('/program', [FrontendController::class, 'indexProgram']);
Route::get('/lembaga/{id}', [FrontendController::class, 'indexBumdes']);
Route::get('/profil', [FrontendController::class, 'profilDesa']);
Route::get('/struktur', [FrontendController::class, 'strukturDesa']);
Route::get('/galeri', [FrontendController::class, 'galeriDesa']);
Route::get('/layanan', [FrontendController::class, 'layananDesa']);
Route::get('/kontak', [FrontendController::class, 'kontakDesa']);
Route::post('/store-keluhan', [WargaController::class, 'storeKeluhan']);
