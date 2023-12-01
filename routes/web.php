<?php

use App\Models\Kelahiran;
use App\Models\TidakMampu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkckController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\BlmnikahController;
use App\Http\Controllers\DomisiliController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VillagerController;
use App\Http\Controllers\BepergianController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KehilanganController;
use App\Http\Controllers\TidakMampuController;

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

Route::get('/', function () {
    return view('pages/surat');
});
Route::get('/home', function () {
    return view('pages/surat');
});

Route::resource('/dataPenduduk', VillagerController::class);

Route::get('/surat', function () {
    return view('pages/surat');
});

Route::resource('/surat/kelahiran', KelahiranController::class);
Route::resource('/surat/kematian', KematianController::class);
Route::resource('/surat/tidakmampu', TidakMampuController::class);
Route::resource('/surat/skck', SkckController::class);
Route::resource('/surat/kehilangan', KehilanganController::class);
Route::resource('/surat/domisili', DomisiliController::class);
Route::resource('/surat/bepergian', BepergianController::class);
Route::resource('/surat/blmnikah', BlmnikahController::class);
Route::resource('/surat/kelahiran', KelahiranController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dataSurat', function () {
//     return view('pages.dataSurat', [
//         'title' => 'Data Surat',
//     ]);
// });