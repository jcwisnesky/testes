<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorretorController;


Route::get('/', [CorretorController::class, 'index'])->name('corretors.index');
Route::post('/', [CorretorController::class, 'store'])->name('corretors.store');
Route::get('/edit/{id}', [CorretorController::class, 'edit'])->name('corretors.edit');
Route::put('/update/{id}', [CorretorController::class, 'update'])->name('corretors.update');
Route::get('/delete/{id}', [CorretorController::class, 'destroy'])->name('corretors.destroy');
