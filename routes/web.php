<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\{
    HomeController,
    UserProfileController,
    LkpsController,
    AdminProdiController,
    DosenController,
    MahasiswaController,
    AdminController
};

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/dosen/prodi', [AdminProdiController::class, 'index_prodi']);
Route::group(
    ['middleware' => 'prodi'],
    function () {
        Route::post('/prodi/profile/update', [AdminProdiController::class, 'updateProfile']);

        Route::get('/lkps/view/{id}', [LkpsController::class, 'form']);
        Route::get('/lkps/input/{id}', [LkpsController::class, 'input']);
    }
);
Route::group(
    ['middleware' => 'dosen'],
    function () {
        Route::post('/dosen/profile/update', [DosenController::class, 'updateProfile']);
        Route::post('/dosen/profile/update-credential', [DosenController::class, 'updateCredential']);
    }
);
Route::group(
    ['middleware' => 'mahasiswa'],
    function () {
        Route::post('/mhs/profile/update', [MahasiswaController::class, 'updateProfile']);
    }
);
Route::get('/profile', [UserProfileController::class, 'index'])->name('pageProfile');
Route::get('/profile/edit', [UserProfileController::class, 'editProfile'])->name('pageEditProfile');
Route::get('/profile/edit-password', [UserProfileController::class, 'editPassword'])->name('pageEditPassword');

Route::get('/lkps/', [LkpsController::class, 'index']);

Route::group(
    ['middleware' => 'admin'],
    function () {
        Route::get('/admin/iaps', [AdminController::class, 'index_iaps'])->name('auditLog');
        Route::get('/audit-log', [AdminController::class, 'index_audit_log'])->name('auditLog');
        Route::get('/audit-log/{id}', [AdminController::class, 'audit_log_detail'])->name('auditLogDetail');

        Route::get('/prodi', [AdminController::class, 'index_prodi'])->name('prodiList');
        Route::get('/prodi/json', [AdminController::class, 'prodi_data']);
        Route::get('/prodi/detail/{id}', [AdminController::class, 'detailProdi'])->name('prodiDetail');
        Route::get('/prodi/add', [AdminController::class, 'addProdi']);
        Route::post('/prodi/insert', [AdminController::class, 'insertProdi']);
        Route::get('/prodi/delete/{id}', [AdminController::class, 'deleteProdi']);
        Route::get('/prodi/edit/{id}', [AdminController::class, 'editProdi']);
        Route::post('/prodi/update/{id}', [AdminController::class, 'updateProdi']);
        Route::get('/prodi/edit-password/{id}', [AdminController::class, 'editProdiPassword'])->name('pageProdiEditPassword');
        Route::post('/prodi/update-credential/{id}', [AdminController::class, 'updateProdiCredential']);


        Route::get('/lkps/prodi', [LkpsController::class, 'index']);
        Route::get('/lkps/prodi/view/{id}', [LkpsController::class, 'admin_form']);
        Route::get('/lkps/prodi/input/{id}', [LkpsController::class, 'admin_input']);
    }
);

// Route::get('/lkps{id}', [LkpsController::class, 'lkps']);
