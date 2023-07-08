<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', function () {
    return view('home',  [
        "title" => "Home",
        "active" => "home"
    ]);
});

// Route::get('admin/input', [ProsesController::class, 'input']);
Route::get('/kategori', [ProsesController::class, 'kategori']);
Route::get('admin/perhitungan', [ProsesController::class, 'perhitungan'])->name('perhitungan');

Route::get('/coba', function () {
    return view('coba');
});

//COBA BOOTSTRAP
Route::get('/home1', function () {
    return view('home1');
});

// ADMIN
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin22', function () {
    return view('admin.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', function() {
//     return view('dashboard.index');
// })->middleware('auth');

// Route::resource('/dashboard/posts', DashboardPostController::class)
// ->middleware('auth');;

// route resource
Route::resource('/admin/mendaftars', \App\Http\Controllers\MendaftarController::class);

// route resource
Route::get('/admin/updatealt/{id}', [\App\Http\Controllers\AlternatifController::class, 'updatealt']);
Route::put('/admin/editalt/{id}', [\App\Http\Controllers\AlternatifController::class, 'editalt']);
Route::POST('/admin/hapusalt/{id}', [\App\Http\Controllers\AlternatifController::class, 'hapusalt']);
Route::resource('/admin/posts', \App\Http\Controllers\AlternatifController::class);
