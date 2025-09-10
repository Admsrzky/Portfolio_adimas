<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/projects', [App\Http\Controllers\HomeController::class, 'Allportofolio'])->name('projects.index');
