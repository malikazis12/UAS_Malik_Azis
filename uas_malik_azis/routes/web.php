<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PasienController;

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

//Data Pasien
Route::get('/pasien/', [PasienController::class, 'index']);
Route::get('/pasien/form/', [PasienController::class, 'create']);
Route::post('/pasien/store/', [PasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
Route::put('/pasien/{id}', [PasienController::class, 'update']);
Route::delete('/pasien/{id}', [PasienController::class, 'destroy']);
