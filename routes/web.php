<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rotta per la homepage
Route::get('/', [PageController::class, 'home'])->name('home');

// Rotte per la sezione "Progetti"
Route::get('/progetti', [PageController::class, 'projectsIndex'])->name('projects.index');
Route::get('/progetti/{project_slug}', [PageController::class, 'projectShow'])->name('projects.show');

// Rotte per la sezione "Servizi"
Route::get('/servizi', [PageController::class, 'servicesIndex'])->name('services.index');
Route::get('/servizi/{slug}', [PageController::class, 'serviceShow'])->name('services.show');

// Rotta per la sezione "Chi Sono"
Route::get('/chi-sono', [PageController::class, 'about'])->name('about');

// Rotte per la sezione "Contatti"
Route::get('/contatti', [PageController::class, 'contact'])->name('contact');
// Gestisce l'invio del modulo di contatto tramite POST
Route::post('/contatti', [PageController::class, 'submitContactForm'])->name('contact.submit');
