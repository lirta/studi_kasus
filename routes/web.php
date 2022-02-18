<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route:: get('/', [PageController::class, 'index']);
Route:: get('/siswa', [PageController::class, 'siswa']);
Route:: get('/guru', [PageController::class, 'guru']);
Route:: get('/mapel', [PageController::class, 'mapel']);
Route:: get('/jadwal_mapel', [PageController::class, 'jadwal_mapel']);
//admin
Route::POST('/add_guru', [AdminController::class, 'add_guru'])->name('add_guru');
