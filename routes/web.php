<?php

use App\Http\Controllers\InstructorController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\VistaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (
    EmailVerificationRequest $request
) {
    $request->fulfill();

    return redirect('/');
})
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

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

Route::resource('asistencia', AsistenciaController::class);
// Route::post('/asistencia.asistencia-salida', [AsistenciaController::class])->name(
//     'paquete'
// );

Route::get('/', [VistaController::class, 'inicio'])->name('index');
Route::get('/sucursales', [VistaController::class, 'sucursalShow'])->name(
    'sucursales'
);
Route::get('/rutinas', [VistaController::class, 'rutinaShow'])->name('rutinas');
Route::get('/paquete', [VistaController::class, 'paqueteShow'])->name(
    'paquete'
);
Route::post('/paquete', [VistaController::class, 'paqueteUpdate'])->name(
    'paquete'
);
