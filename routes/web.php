<?php

use App\Models\Empanadas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpanadasController;

Route::get('/', [EmpanadasController::class, 'index'])->name('empanada.index');
Route::get('/create', [EmpanadasController::class, 'create'])->name('empanada.create');
Route::post('/store', [EmpanadasController::class, 'store'])->name('empanada.store');


Route::get('/edit/{id}', [EmpanadasController::class, 'edit'])->name('empanada.edit');
Route::put('/update/{id}', [EmpanadasController::class, 'update'])->name('empanada.update');


Route::get('/show/{id}', [EmpanadasController::class, 'show'])->name('empanada.show');
Route::delete('/delete/{id}', [EmpanadasController::class, 'destroy'])->name('empanada.destroy');

