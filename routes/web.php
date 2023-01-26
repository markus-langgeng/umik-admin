<?php

use App\Http\Controllers\DataProdukController;
use App\Http\Controllers\DataUMKMController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignInController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

/*
 * Untuk controller login & register mau pake kelas yg namanya apa?
 *  - Mau namanya sesuai kayak class diagram? Klo iya, berarti nama kelasnya
 *    SignInController
 *  - Tapi menurutku bisa klo nama kelas controllernya itu bisa sama.Jadi,
 *    namanya UserController.
 *  Aku bingung sebenere nama kelasnya itu perlu ngikutin class diagramnya atau ngga.
 *  Utk skrg, aku buat beda dulu aja lah, biar ada progres.
 */

Route::get('/', [ProfileController::class, 'index']);

Route::get('/dashboard', [ProfileController::class, 'index']);

/* ===============
 * | Bagian User |
 * ===============
 */

// Menampilkan semua data users
Route::get('/users', [DataUserController::class, 'getData']);

/* ===============
 * | Bagian UMKM |
 * ===============
 */

// Menampilkan semua data umkm
Route::get('/umkm', [DataUMKMController::class, 'getData']);

/* =============== */

/* ======================
 * | Bagian Data Produk |
 * ======================
 */

// Menampilkan data produk umkm yg memiliki id = {id}
Route::get('/umkm/{id}', [DataProdukController::class, 'getData'])->whereNumber('id');

/* =============== */
Route::get('/laporan', [ProfileController::class, 'showLaporan']);

Route::get('/login', [SignInController::class, 'index'])->name('login');
Route::post('/login', [SignInController::class, 'login']);

