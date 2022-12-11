<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaPelanggaranController;
use App\Models\Kelas;
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

Route::get('/', function () {
    return view('welcome');
});

# Return Redirect 
Route::get('/', function () {
    return redirect()->route('kasus');
});


## === Siswa Route === #
// 1.) Index Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
// 2.) Tambah Siswa Page
Route::get('/tambahsiswa', [SiswaController::class, 'tambahsiswa']);
// 3.) Tambah Siswa Action
Route::post('/insertsiswa', [SiswaController::class, 'insertsiswa']);
// 4.) Delete Siswa
Route::get('/deletesiswa/{id}', [SiswaController::class, 'deletesiswa']);
// 5.) Edit Siswa Page
Route::get('/editsiswa/{id}', [SiswaController::class, 'editsiswa']);
// 6.) Edit Siswa Action
Route::post('/updatesiswa/{id}', [SiswaController::class, 'updatesiswa']);
// 7.) Info Siswa
Route::get('/infosiswa/{id}', [SiswaController::class, 'infosiswa']);

## === Kelas Route === #
// 1.) Index Kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
// 2.) Tambah Kelas Page
Route::get('/tambahkelas', [KelasController::class, 'tambahkelas']);
// 3.) Tambah Kelas Page
Route::post('/insertkelas', [KelasController::class, 'insertkelas']);
// 4.) Delete Kelas
Route::get('/deletekelas/{id}', [KelasController::class, 'deletekelas']);
// 5.) Edit Kelas Page
Route::get('/editkelas/{id}', [KelasController::class, 'editkelas']);
// 6.) Edit Kelas Action
Route::post('/updatekelas/{id}', [KelasController::class, 'updatekelas']);
// 7.) Info Kelas 
Route::get('/infokelas/{id}', [KelasController::class, 'infokelas']);

## === Guru Route === #
// 1.) Index Guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
// 2.) Tambah Guru Page
Route::get('/tambahguru', [GuruController::class, 'tambahguru']);
// 3.) Tambah Guru Page
Route::post('/insertguru', [GuruController::class, 'insertguru']);
// 4.) Delete Guru
Route::get('/deleteguru/{id}', [GuruController::class, 'deleteguru']);
// 5.) Edit Guru Page
Route::get('/editguru/{id}', [GuruController::class, 'editguru']);
// 6.) Edit Guru Action
Route::post('/updateguru/{id}', [GuruController::class, 'updateguru']);
// 7.) Info Guru 
Route::get('/infoguru/{id}', [GuruController::class, 'infoguru']);

## === Jurusan Route === #
// 1.) Index Jurusan
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
// 2.) Tambah Jurusan Page
Route::get('/tambahjurusan', [JurusanController::class, 'tambahjurusan']);
// 3.) Tambah Jurusan Page
Route::post('/insertjurusan', [JurusanController::class, 'insertjurusan']);
// 4.) Delete Jurusan
Route::get('/deletejurusan/{id}', [JurusanController::class, 'deletejurusan']);
// 5.) Edit Jurusan Page
Route::get('/editjurusan/{id}', [JurusanController::class, 'editjurusan']);
// 6.) Edit Jurusan Action
Route::post('/updatejurusan/{id}', [JurusanController::class, 'updatejurusan']);
// 7.) Info Jurusan 
Route::get('/infojurusan/{id}', [JurusanController::class, 'infojurusan']);

## === Category Route === #
// 1.) Index Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');
// 2.) Tambah Category Page
Route::get('/tambahcategory', [CategoryController::class, 'tambahcategory']);
// 3.) Tambah Category Page
Route::post('/insertcategory', [CategoryController::class, 'insertcategory']);
// 4.) Delete Category
Route::get('/deletecategory/{id}', [CategoryController::class, 'deletecategory']);
// 5.) Edit Category Page
Route::get('/editcategory/{id}', [CategoryController::class, 'editcategory']);
// 6.) Edit Category Action
Route::post('/updatecategory/{id}', [CategoryController::class, 'updatecategory']);

## === Pelanggaran Route === #
// 1.) Index Pelanggaran
Route::get('/pelanggaran', [PelanggaranController::class, 'index'])->name('pelanggaran');
// 2.) Tambah Pelanggaran Page
Route::get('/tambahpelanggaran', [PelanggaranController::class, 'tambahpelanggaran']);
// 3.) Tambah Pelanggaran Page
Route::post('/insertpelanggaran', [PelanggaranController::class, 'insertpelanggaran']);
// 4.) Delete Pelanggaran
Route::get('/deletepelanggaran/{id}', [PelanggaranController::class, 'deletepelanggaran']);
// 5.) Edit Pelanggaran Page
Route::get('/editpelanggaran/{id}', [PelanggaranController::class, 'editpelanggaran']);
// 6.) Edit Pelanggaran Action
Route::post('/updatepelanggaran/{id}', [PelanggaranController::class, 'updatepelanggaran']);

## === Kasus Route === #
// 1.) Index Kasus
Route::get('/kasus', [SiswaPelanggaranController::class, 'index'])->name('kasus');
// 2.) Tambah Kasus Page
Route::get('/tambahkasus', [SiswaPelanggaranController::class, 'tambahkasus']);
// 3.) Tambah Kasus Page
Route::post('/insertkasus', [SiswaPelanggaranController::class, 'insertkasus']);
// 4.) Delete Kasus
Route::get('/deletekasus/{id}', [SiswaPelanggaranController::class, 'deletekasus']);