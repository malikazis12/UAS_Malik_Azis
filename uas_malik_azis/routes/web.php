<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('master');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Data Pasien
Route::get('/pasien/', [PasienController::class, 'index']);
Route::get('/pasien/form/', [PasienController::class, 'create']);
Route::post('/pasien/store/', [PasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
Route::put('/pasien/{id}', [PasienController::class, 'update']);
Route::delete('/pasien/{id}', [PasienController::class, 'destroy']);

//Data Rekam Medis
Route::get('/rekammedis/', [RekamMedisController::class, 'index']);
Route::get('/rekammedis/form/', [RekamMedisController::class, 'create']);
Route::post('/rekammedis/store/', [RekamMedisController::class, 'store']);
Route::get('/rekammedis/edit/{id}', [RekamMedisController::class, 'edit']);
Route::put('/rekammedis/{id}', [RekamMedisController::class, 'update']);
Route::delete('/rekammedis/{id}', [RekamMedisController::class, 'destroy']);

//Data Petugas
Route::get('/petugas/', [PetugasController::class, 'index']);
Route::get('/petugas/form/', [PetugasController::class, 'create']);
Route::post('/petugas/store/', [PetugasController::class, 'store']);
Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit']);
Route::put('/petugas/{id}', [PetugasController::class, 'update']);
Route::delete('/petugas/{id}', [PetugasController::class, 'destroy']);


