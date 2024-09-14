<?php

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

use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;

Route::get('/', [EventController::class, 'index'])->name('events.home');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create')->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::post('/events', [EventController::class, 'store']);

Route::get('/contato', [ContactController::class, 'index'])->name("support.contact")->middleware('auth');

Route::get('/MeusEventos', [EventController::class, 'dashboard'])->name("events.dashboard")->middleware('auth');

Route::delete('/events/{id}', [EventController::class, 'destroy'])->name("events.destroy")->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name("events.edit")->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->name("events.upgrade")->middleware('auth');

Route::get('phpinfo', fn () => phpinfo());

Route::middleware([
    'auth:web',
    config('jetstream.auth_session'),
    'verified',
])->group (function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
