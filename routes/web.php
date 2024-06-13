<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;

// Rutas de reservaciones
Route::get('reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::resource('reservations', ReservationController::class)->except(['create', 'store']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('rooms', RoomController::class);
});

// Otras rutas
Route::get('/biblioteca', [PlantController::class, 'search'])->name('biblioteca');
Route::get('/buscar', [SearchController::class, 'search'])->name('search');
Route::get('/search', [PlantController::class, 'search'])->name('plants.search');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biblioteca', function () {
    return view('biblioteca');
});

Route::get('/contactanos', function () {
    return view('contactanos');
});

Route::post('/enviar-contacto', [ContactController::class, 'enviarContacto']);

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/configuracion', [ConfigController::class, 'index'])->name('config.index');
    Route::post('/configuracion', [ConfigController::class, 'update'])->name('config.update');
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [UserController::class, 'register']);
    Route::get('/plants', [PlantController::class, 'index'])->name('plants.index');
    Route::get('/plants/create', [PlantController::class, 'create'])->name('plants.create');
    Route::post('/plants', [PlantController::class, 'store'])->name('plants.store');
    Route::get('/plants/{id}', [PlantController::class, 'show'])->name('plants.show');
    Route::get('/plants/{id}/edit', [PlantController::class, 'edit'])->name('plants.edit');
    Route::put('/plants/{id}', [PlantController::class, 'update'])->name('plants.update');
    Route::delete('/plants/{id}', [PlantController::class, 'destroy'])->name('plants.destroy');
    Route::post('/filter', [PlantController::class, 'filterByDisease'])->name('plants.filterByDisease');
    Route::get('/plants/filterByDisease', [PlantController::class, 'filterByDisease'])->name('plants.filterByDisease');
    Route::get('/filter', [PlantController::class, 'showFilterForm'])->name('filter.form');
    Route::get('/plants/search', [PlantController::class, 'search'])->name('plants.search');
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
