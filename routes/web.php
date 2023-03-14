<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpanadasController;

Route::get('/', [EmpanadasController::class, 'index'])->name('empanada.index');