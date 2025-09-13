<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/projects', [App\Http\Controllers\HomeController::class, 'Allportofolio'])->name('projects.index');

Route::post('/contact', [HomeController::class, 'NewEmailStore'])->name('contact.emailstore')->middleware('throttle:3,1440');
