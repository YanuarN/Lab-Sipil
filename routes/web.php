<?php

use App\Http\Controllers\AggregatController;
use App\Http\Controllers\BookingEksternalController;
use App\Http\Controllers\CetakNotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;


Route::get('/', function () {
    
    return view('index');
});
// Route::get('/reserve', function () {
//     return view('calender');
// });
//Route Booking mahasiswa
Route::resource('permohonan', PermohonanController::class);
Route::get('/get-booking-events', [PermohonanController::class, 'getBookingEvents']);
Route::get('/cek-kuota', [PermohonanController::class, 'checkKuota'])->name('cek-kuota');
Route::get('/generate-nota/{id}', [PermohonanController::class, 'generateNota'])->name('generate.nota');
Route::get('/generate-bebas-lab/{id}', [PermohonanController::class, 'generateBebasLab'])->name('generate.bebas.lab');

//Route Booking Eksternal
Route::resource('booking-Eksternal', BookingEksternalController::class);
Route::get('/generate-nota-eks/{id}', [CetakNotaController::class, 'generateNota'])->name('nota.eksternal');


//Route Permohonan Bahan
Route::post('/permohonan-bahan', [AggregatController::class, 'store'])->name('permohonan-bahan.store');
Route::get('/permohonan-bahan', [AggregatController::class, 'create'])->name('permohonan-bahan.create');
Route::get('/generate-word-document/{id}', [AggregatController::class, 'generatePermohonanBahan'])->name('generate.word.document');




