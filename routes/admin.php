<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('admin', function () {
    return view('admin');
})->name('admin');