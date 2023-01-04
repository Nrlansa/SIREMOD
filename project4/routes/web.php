<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratkeluarController;
use App\Http\Controllers\PerubahanController;
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
//     return view('template.welcome');
// });
// Route::get('admin', function () {
//     return view('admin.base');
// });

// Route::get('admin.base', [HomeController::class, 'showTemplate']);
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.Dasboard');
    });
    Route::resource('upload', UploadController::class);
    Route::resource('user', UserController::class);
    Route::resource('surat-masuk', SuratMasukController::class);
    Route::resource('surat-keluar', SuratkeluarController::class);
    Route::resource('perubahan', PerubahanController::class);
});


//bagian regulasi
Route::get('/siremod', [HomeController::class, 'Showregulasi']);
Route::get('status/{upload}', [HomeController::class, 'Showstatus']);
// Route::get('/pemerintah', [HomeController::class, 'ShowPemerintah']);
// Route::get('/menteri', [HomeController::class, 'ShowMenteri']);
// Route::get('/presiden', [HomeController::class, 'ShowPresiden']);
// Route::get('/bupati', [HomeController::class, 'ShowBupati']);
// Route::get('/daerah', [HomeController::class, 'ShowDaerah']);
// Route::get('/gubernur', [HomeController::class, 'ShowGubernur']);
// Route::get('/skbupati', [HomeController::class, ' ShowSkbupati']);
// Route::get('/skkepptsp', [HomeController::class, 'ShowSkkepptsp']);
// Route::get('/uu', [HomeController::class, 'ShowUu']);
Route::get('/search', [HomeController::class, 'search']);
// Route::get('/home', [HomeController::class, 'Showregulasi']);


//bagian surat
// Route::resource('surat-keluar', SuratkeluarController::class);
// Route::resource('surat-masuk', SuratmasukController::class);
// Route::resource('jenis-dokumen', JenisdokumenController::class);
// Route::resource('dokumen', DokumenController::class);
// Route::resource('review-dokumen', ReviewDokumenController::class);

Route::get('loginregulasi', [AuthController::class, 'showlogin'])->name('login');
Route::post('loginregulasi', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'showlogout']);