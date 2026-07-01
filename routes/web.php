<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;

// Rutas del TP Gestión de Laboratorio
Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
Route::post('/equipos/guardar', [EquipoController::class, 'store'])->name('equipos.store');