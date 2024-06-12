<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicalRecordController;













Route::get('/patients', [PatientController::class, 'index']);
    Route::post('/patients', [PatientController::class, 'store']);
    Route::get('/patients/{id}', [PatientController::class, 'show']);
    Route::put('/patients/{id}', [PatientController::class, 'update']);
    Route::delete('/patients/{id}', [PatientController::class, 'destroy']);

    Route::get('/records', [MedicalRecordController::class, 'index']);
    Route::post('/records', [MedicalRecordController::class, 'store']);
    Route::get('/records/{id}', [MedicalRecordController::class, 'show']);
    Route::put('/records/{id}', [MedicalRecordController::class, 'update']);
    Route::delete('/records/{id}', [MedicalRecordController::class, 'destroy']);

