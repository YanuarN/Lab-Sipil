<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;

Route::get('/', function () {
    
    return view('index');
});
Route::get('/reserve', function () {
    return view('reserve');
});

Route::resource('permohonan', PermohonanController::class);


