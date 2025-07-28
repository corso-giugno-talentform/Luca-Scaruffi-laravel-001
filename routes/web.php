<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/chi-sono', [PageController::class, 'about'])->name('about');
Route::get('/contatti', [PageController::class, 'contact'])->name('contact');

Route::get('/progetti', [PageController::class, 'projectsIndex'])->name('projects.index');
Route::get('/progetti/{project_slug}', [PageController::class, 'projectShow'])->name('projects.show');

Route::get('/servizi', [PageController::class, 'servicesIndex'])->name('services.index');
Route::get('/servizi/{slug}', [PageController::class, 'serviceShow'])->name('services.show');
