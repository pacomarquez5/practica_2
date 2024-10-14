<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Menus Inicio
Route::get('/inicio', function () {
    return view('menu2');
})->middleware(['auth', 'verified'])->name("menu2");

Route::get('/', function () {
    return view('menu1');
})->name("menu1");

Route::get('/inicio', function () {
    return view('menu2');
})->middleware(['auth', 'verified'])->name('dashboard');


//CATALOGOS
Route::get('/catalogos', function () {
    return view('catalogos.catalogos');
})->middleware(['auth', 'verified'])->name("cata");

Route::get('/horarios', function () {
    return view('catalogos.horarios');
})->middleware(['auth', 'verified'])->name("horarios");

Route::get('/proyects', function () {
    return view('catalogos.proyectos');
})->middleware(['auth', 'verified'])->name("proyectos");



/////////////////////////////////////////////////////////////////////////
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
