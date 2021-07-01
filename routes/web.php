<?php

use App\Http\Controllers\InstructorController;
use App\Http\Controllers\VistaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('inicio', function () {
    return view('inicio');
});

// Route::get('/', function () {
//     return view('inicio');
// });

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');

Route::resource('instructor', InstructorController::class); //->middleware('auth');

Route::get('/', [VistaController::class, 'inicio'])->name('index');
Route::get('/sucursales', [VistaController::class, 'sucursalShow'])->name(
    'sucursales'
);
Route::get('/rutinas', [VistaController::class, 'rutinaShow'])->name('rutinas');
