<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

Route::get('/students', [studentController::class, 'index']);

Route::get('/students/{id}', [studentController::class, 'show']);

Route::post('/students', [studentController::class, 'store']);

Route::put('/students/{id}', function () {
    return 'Actualizando estudiante';
});

Route::delete('/students/{id}', [studentController::class, 'destroy']);