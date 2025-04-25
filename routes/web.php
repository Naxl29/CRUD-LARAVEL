<?php

use App\Http\Controllers\personasController;
use App\Models\Personas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personas/create', [personasController::class, 'create'])->name('personas.create');

Route::post('/personas/store', [personasController::class, 'store'])->name('personas.store');

Route::get('/personas/read', [personasController::class, 'read'])->name('personas.read');

Route::put('/personas/{persona}', [personasController::class, 'update'])->name('personas.update');

Route::get('/personas/delete', [personasController::class, 'delete'])->name('personas.delete');
Route::post('/personas/destroy', [personasController::class, 'destroy'])->name('personas.destroy');
