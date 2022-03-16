<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\{
    HomeController,
    UserProfileController,
    LkpsController,
    LedController,
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

Auth::routes();

Route::name('prodi')
    ->middleware('prodi')
    ->group(function () {
        Route::post('/prodi/profile/update', [AdminProdiController::class, 'updateProfile']);

        Route::get('/lkps/view/{id}', [LkpsController::class, 'form']);
        Route::get('/lkps/input/{id}', [LkpsController::class, 'input']);
        Route::get('/penilaian', [AdminProdiController::class, 'index_penilaian']);
        Route::get('/penilaian/{id}', [AdminProdiController::class, 'form_penilaian']);
    });
Route::get('/lkps/', [LkpsController::class, 'index']);

Route::name('led')
    ->prefix('led')
    ->middleware('level:1,2')
    ->group(function () {
        Route::get('/', [LedController::class, 'index']);
        Route::get('/{id}', [LedController::class, 'form']);
        // Route::get('/lkps/input/{id}', [LkpsController::class, 'input']);
        // Route::get('/penilaian', [AdminProdiController::class, 'index_penilaian']);
        // Route::get('/penilaian/{id}', [AdminProdiController::class, 'form_penilaian']);
    });
Route::get('/profile', [UserProfileController::class, 'index'])->name('pageProfile');
/*

Route::group(
    ['middleware' => 'prodi'],
    function () {
        Route::post('/prodi/profile/update', [AdminProdiController::class, 'updateProfile']);

        Route::get('/lkps/view/{id}', [LkpsController::class, 'form']);
        Route::get('/lkps/input/{id}', [LkpsController::class, 'input']);
        Route::get('/penilaian', [AdminProdiController::class, 'index_penilaian']);
        Route::get('/penilaian/{id}', [AdminProdiController::class, 'form_penilaian']);
    }
);*/


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dosen/prodi', [AdminProdiController::class, 'index_prodi']);

Route::name('admin')
    ->middleware('admin')
    ->group(
        function () {
            Route::get('/admin/iaps', [AdminController::class, 'index_iaps']);
            Route::get('/audit-log', [AdminController::class, 'index_audit_log'])->name('auditLog');
            Route::get('/audit-log/{id}', [AdminController::class, 'audit_log_detail'])->name('auditLogDetail');

            Route::get('/form-access', [AdminController::class, 'index_form_access'])->name('formAccess');
            Route::post('/form-access/update', [AdminController::class, 'update_form_access']);

            Route::get('/manage/prodi', [AdminController::class, 'index_prodi'])->name('prodiList');
            Route::get('/manage/prodi/json', [AdminController::class, 'prodi_data']);
            Route::get('/manage/prodi/{id}', [AdminController::class, 'detailProdi'])->name('prodiDetail');
            Route::get('/manage/add-prodi', [AdminController::class, 'addProdi']);
            Route::post('/manage/prodi/insert', [AdminController::class, 'insertProdi']);
            Route::get('/manage/prodi/delete/{id}', [AdminController::class, 'deleteProdi']);
            Route::get('/manage/prodi/edit/{id}', [AdminController::class, 'editProdi']);
            Route::post('/manage/prodi/update/{id}', [AdminController::class, 'updateProdi']);
            Route::get('/manage/prodi/edit-password/{id}', [AdminController::class, 'editProdiPassword'])->name('pageProdiEditPassword');
            Route::post('/manage/prodi/update-credential/{id}', [AdminController::class, 'updateProdiCredential']);

            Route::get('/manage/mhs', [AdminController::class, 'index_mhs'])->name('mhsList');
            // Route::get('/manage/mhs/json', [AdminController::class, 'mhs_data']);
            Route::get('/manage/mhs/{id}', [AdminController::class, 'detailMhs'])->name('mhsDetail');
            Route::get('/manage/add-mhs', [AdminController::class, 'addMhs']);
            Route::post('/manage/mhs/insert', [AdminController::class, 'insertMhs']);
            Route::get('/manage/mhs/delete/{id}', [AdminController::class, 'deleteMhs']);
            Route::get('/manage/mhs/edit/{id}', [AdminController::class, 'editMhs']);
            Route::post('/manage/mhs/update/{id}', [AdminController::class, 'updateMhs']);
            Route::get('/manage/mhs/edit-password/{id}', [AdminController::class, 'editMhsPassword'])->name('pageMhsEditPassword');
            Route::post('/manage/mhs/update-credential/{id}', [AdminController::class, 'updateMhsCredential']);

            Route::get('/manage/dosen', [AdminController::class, 'index_dosen'])->name('dosenList');
            // Route::get('/manage/mhs/json', [AdminController::class, 'mhs_data']);
            Route::get('/manage/dosen/{id}', [AdminController::class, 'detailDosen'])->name('dosenDetail');
            Route::get('/manage/add-dosen', [AdminController::class, 'addDosen']);
            Route::post('/manage/dosen/insert', [AdminController::class, 'insertDosen']);
            Route::get('/manage/dosen/delete/{id}', [AdminController::class, 'deleteDosen']);
            Route::get('/manage/dosen/edit/{id}', [AdminController::class, 'editDosen']);
            Route::post('/manage/dosen/update/{id}', [AdminController::class, 'updateDosen']);
            Route::get('/manage/dosen/edit-password/{id}', [AdminController::class, 'editDosenPassword'])->name('pageDosenEditPassword');
            Route::post('/manage/dosen/update-credential/{id}', [AdminController::class, 'updateDosenCredential']);

            Route::get('/lkps/prodi', [LkpsController::class, 'index']);
            Route::get('/lkps/prodi/view/{id}', [LkpsController::class, 'admin_form']);
            Route::get('/lkps/prodi/input/{id}', [LkpsController::class, 'admin_input']);
        }
    );


// Route::get('/lkps{id}', [LkpsController::class, 'lkps']);
