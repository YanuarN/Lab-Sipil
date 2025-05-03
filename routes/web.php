<?php

use App\Http\Controllers\AggregatController;
use App\Http\Controllers\BookingEksternalController;
use App\Http\Controllers\CetakNotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PinjamRuangController;

Route::get('/', function () {
    
    return view('index');
});
Route::get('/profil', function () {
    return view('page.Profil');
});
Route::get('/informasi', function () {
    return view('page.Informasi');
});

//Route Booking mahasiswa
Route::resource('permohonan', PermohonanController::class);
Route::get('/get-booking-events', [PermohonanController::class, 'getBookingEvents']);
Route::get('/cek-kuota', [PermohonanController::class, 'checkKuota'])->name('cek-kuota');
Route::get('/generate-nota/{id}', [PermohonanController::class, 'generateNotaPDF'])->name('generate.nota');
// Route::get('/dokumen/{id}', [PermohonanController::class, 'generateDocumentById'])->name('generate.dokumen');
Route::get('/generate-bebas-lab/{id}', [PermohonanController::class, 'generateBebasLab'])->name('generate.bebas.lab');
Route::get('/get-kepala-lab/{labId}', [PermohonanController::class, 'getKepalaLab']);

//Route Booking Eksternal
Route::resource('booking-Eksternal', BookingEksternalController::class);
Route::get('/generate-nota-eks/{id}', [CetakNotaController::class, 'generateNota'])->name('nota.eksternal');


//Route Permohonan Bahan
Route::post('/permohonan-bahan', [AggregatController::class, 'store'])->name('permohonan-bahan.store');
Route::get('/permohonan-bahan', [AggregatController::class, 'create'])->name('permohonan-bahan.create');
Route::get('/generate-word-document/{id}', [AggregatController::class, 'generatePermohonanBahan'])->name('generate.word.document');

//Route Peminjaman Ruang
Route::get('/pinjam-ruang', [PinjamRuangController::class, 'index'])->name('pinjam-ruang.index');
Route::post('/pinjam-ruang', [PinjamRuangController::class, 'store'])->name('pinjam-ruang.store');



