<?php

use App\Http\Controllers\Backend\VendorController;
use illuminate\Support\Facades\Route;

/** Vendor Routes */
Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');
