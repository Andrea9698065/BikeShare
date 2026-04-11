<?php
use App\Http\Controllers\BiciclettaController;
use App\Http\Controllers\NoleggioController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\StazioneController;
use App\Http\Controllers\UtenteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/utenti/crea', [UtenteController::class, 'create'])->name('utenti.create');
Route::post('/utenti', [UtenteController::class, 'store'])->name('utenti.store');




Route::get('/stazioni/crea', [StazioneController::class, 'create'])->name('stazioni.create');
Route::post('/stazioni', [StazioneController::class, 'store'])->name('stazioni.store');

Route::get('/biciclette/crea', [BiciclettaController::class, 'create'])->name('biciclette.create');
Route::post('/biciclette', [BiciclettaController::class, 'store'])->name('biciclette.store');


Route::get('/slot/crea', [SlotController::class, 'create'])->name('slot.create');
Route::post('/slot', [SlotController::class, 'store'])->name('slot.store');

Route::get('/noleggi/crea', [NoleggioController::class, 'create'])->name('noleggi.create');
Route::post('/noleggi', [NoleggioController::class, 'store'])->name('noleggi.store');


