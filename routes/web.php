<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\panitia;
use App\Http\Controllers\siswa;
use App\Http\Controllers\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', [user\WelcomeController::class, 'index'])->name('home');
//Route::get('/home', [user\WelcomeController::class, 'index'])->name('home2');
Route::get('/berita', [user\BeritaController::class, 'index'])->name('user.berita');
Route::get('/berita/beritadetail/{id}', [user\BeritaController::class, 'detail'])->name('user.berita.detail');
Route::get('/jurusan', [user\JurusanController::class, 'index'])->name('user.jurusan');
Route::get('/galeri', [user\GaleriController::class, 'index'])->name('user.galeri');
Route::get('/kontak', [user\KontakController::class, 'index'])->name('user.kontak');
Route::post('/kontak', [user\KontakController::class, 'store'])->name('user.kontak.store');
Route::get('/tentang', [user\TentangController::class, 'index'])->name('user.tentang');
Route::get('/kategori/{id}', [KategoriController::class, 'beritaByKategori'])->name('user.kategori');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
//admin data user admin
    Route::get('/admin/data_admin/index', [admin\AdminController::class, 'index'])->name('admin.data_admin.index');
    Route::get('/admin/data_admin/tambah', [admin\AdminController::class, 'tambah'])->name('admin.data_admin.tambah');
    Route::post('/admin/data_admin/store', [admin\AdminController::class, 'store'])->name('admin.data_admin.store');
    Route::get('/admin/data_admin/edit/{id}', [admin\AdminController::class, 'edit'])->name('admin.data_admin.edit');
    Route::post('/admin/data_admin/update/{id}', [admin\AdminController::class, 'update'])->name('admin.data_admin.update');
    Route::get('/admin/data_admin/delete/{id}', [admin\AdminController::class, 'delete'])->name('admin.data_admin.delete');

//admin data user panitia
    Route::get('/admin/data_panitia/index', [admin\PanitiaController::class, 'index'])->name('admin.data_panitia.index');
    Route::get('/admin/data_panitia/tambah', [admin\PanitiaController::class, 'tambah'])->name('admin.data_panitia.tambah');
    Route::post('/admin/data_panitia/store', [admin\PanitiaController::class, 'store'])->name('admin.data_panitia.store');
    Route::get('/admin/data_panitia/edit/{id}', [admin\PanitiaController::class, 'edit'])->name('admin.data_panitia.edit');
    Route::post('/admin/data_panitia/update/{id}', [admin\PanitiaController::class, 'update'])->name('admin.data_panitia.update');
    Route::get('/admin/data_panitia/delete/{id}', [admin\PanitiaController::class, 'delete'])->name('admin.data_panitia.delete');

    Route::get('/admin/data_siswa/index', [admin\SiswaController::class, 'index'])->name('admin.data_siswa.index');
    Route::get('/admin/data_siswa/reset/{id}', [admin\SiswaController::class, 'reset'])->name('admin.data_siswa.reset');
    Route::post('/admin/data_siswa/update/{id}', [admin\SiswaController::class, 'update'])->name('admin.data_siswa.update');

//admin berita
    Route::get('/admin/data_berita/index', [admin\BeritaController::class, 'index'])->name('admin.berita');
    Route::get('/admin/data_berita/tambah', [admin\BeritaController::class, 'tambah'])->name('admin.tambah.berita');
    Route::post('/admin/data_berita/store', [admin\BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/admin/data_berita/edit/{id}', [admin\BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::post('/admin/data_berita/update/{id}', [admin\BeritaController::class, 'update'])->name('admin.berita.update');
    Route::get('/admin/data_berita/delete/{id}', [admin\BeritaController::class, 'delete'])->name('admin.berita.delete');
    Route::get('/admin/data_berita/detail/{id}', [admin\BeritaController::class, 'detail'])->name('admin.berita.detail');
//admin kategori berita
    Route::get('/admin/data_kategori_berita/index', [admin\KategoriberitaController::class, 'index'])->name('admin.kategori');
    Route::get('/admin/data_kategori_berita/tambah', [admin\KategoriberitaController::class, 'tambah'])->name('admin.tambah.kategori');
    Route::post('/admin/data_kategori_berita/store', [admin\KategoriberitaController::class, 'store'])->name('admin.kategori.store');

    Route::get('/admin/data_kategori_berita/edit/{id}', [admin\BeritaController::class, 'edit'])->name('admin.kategori.edit');
    Route::post('/admin/data_kategori_berita/update/{id}', [admin\BeritaController::class, 'update'])->name('admin.kategori.update');
    Route::get('/admin/data_kategori_berita/delete/{id}', [admin\BeritaController::class, 'delete'])->name('admin.kategori.delete');
    Route::get('/admin/data_kategori_berita/detail/{id}', [admin\BeritaController::class, 'detail'])->name('admin.kategori.detail');

//admin jurusan
    Route::get('/admin/data_jurusan/index', [admin\JurusanController::class, 'index'])->name('admin.jurusan');
    Route::get('/admin/data_jurusan/tambah', [admin\JurusanController::class, 'tambah'])->name('admin.tambah.jurusan');
    Route::post('/admin/data_jurusan/store', [admin\JurusanController::class, 'store'])->name('admin.jurusan.store');
    Route::get('/admin/data_jurusan/edit/{id}', [admin\JurusanController::class, 'edit'])->name('admin.jurusan.edit');
    Route::post('/admin/data_jurusan/update/{id}', [admin\JurusanController::class, 'update'])->name('admin.jurusan.update');
    Route::get('/admin/data_jurusan/delete/{id}', [admin\JurusanController::class, 'delete'])->name('admin.jurusan.delete');

//admin laporan
    Route::get('/admin/laporan/lp_panitia', [admin\LaporanController::class, 'index'])->name('admin.laporan.panitia');
    Route::get('/admin/laporan/lp_jurusan', [admin\LaporanController::class, 'jurusan'])->name('admin.laporan.jurusan');
    Route::get('/admin/laporan/lp_berita', [admin\LaporanController::class, 'berita'])->name('admin.laporan.berita');
    Route::get('/admin/laporan/lp_siswa', [admin\LaporanController::class, 'siswa'])->name('admin.laporan.siswa');
//admin kontak
    Route::get('/admin/data_kontak/index', [admin\KontakController::class, 'index'])->name('admin.kontak');
    Route::get('/admin/data_kontak/delete/{id}', [admin\KontakController::class, 'delete'])->name('admin.kontak.delete');
//admin tentang (Belum selesai)
    Route::get('/admin/data_tentang/index', [admin\TentangController::class, 'index'])->name('admin.tentang');
//admin galeri
    Route::get('/admin/data_galeri/index', [admin\GaleriController::class, 'index'])->name('admin.galeri');
    Route::get('/admin/data_galeri/tambah', [admin\GaleriController::class, 'tambah'])->name('admin.tambah.galeri');
    Route::post('/admin/data_galeri/store', [admin\GaleriController::class, 'store'])->name('admin.galeri.store');
    Route::get('/admin/data_galeri/delete/{id}', [admin\GaleriController::class, 'delete'])->name('admin.galeri.delete');
});

// Role Panitia
Route::group(['middleware' => ['auth', 'checkRole:panitia']], function () {
    Route::get('/panitia', [panitia\DashboardController::class, 'index'])->name('panitia.dashboard');
//panitia pendaftaran
    Route::get('/panitia/data_calon/index', [panitia\CalonsiswaController::class, 'index'])->name('panitia.calon_siswa');
    Route::get('/panitia/data_calon/konfirmasi/{id}', [panitia\CalonsiswaController::class, 'konfirmasi'])->name('panitia.konfirmasi');

//Panitia Pengumuman
    Route::get('/panitia/data_pengumuman/index', [panitia\PengumumanController::class, 'index'])->name('panitia.pengumuman');
    Route::get('/panitia/data_pengumuman/tambah', [panitia\PengumumanController::class, 'tambah'])->name('panitia.tambah.pengumuman');
    Route::post('/panitia/data_pengumuman/store', [panitia\PengumumanController::class, 'store'])->name('panitia.pengumuman.store');
    Route::get('/panitia/data_pengumuman/edit/{id}', [panitia\PengumumanController::class, 'edit'])->name('panitia.edit.pengumuman');
    Route::post('/panitia/data_pengumuman/update/{id}', [panitia\PengumumanController::class, 'update'])->name('panitia.pengumuman.update');

//panitia pengumuman pesan
    Route::get('/panitia/data_pengumuman/pesan/{id}', [panitia\PengumumanController::class, 'pesan'])->name('panitia.pesan');
    Route::post('/panitia/data_pengumuman/pesan/{id}', [panitia\PengumumanController::class, 'pesan'])->name('panitia.pesan');
    Route::post('/panitia/data_pengumuman/data_pesan', [panitia\PengumumanController::class, 'data_pesan'])->name('panitia.pesan.pengumuman');

//panitia Registrasi
    Route::get('/panitia/data_registrasi/index', [panitia\RegistrasiController::class, 'index'])->name('panitia.registrasi');
//panitia laporan
    Route::get('/panitia/data_laporan/laporan_csi', [panitia\LaporancsiController::class, 'index'])->name('panitia.laporancsi');
    Route::get('/panitia/data_laporan/laporan_rus', [panitia\LaporanrusController::class, 'index'])->name('panitia.laporanrus');
    Route::get('/panitia/data_laporan/laporan_pgn', [panitia\LaporanpgnController::class, 'index'])->name('panitia.laporanpgn');

});

// Role siswa
Route::group(['middleware' => ['auth', 'checkRole:siswa']], function () {
    Route::get('/siswa', [siswa\DashboardController::class, 'index'])->name('siswa.dashboard');
    Route::get('/siswa/jurusan', [siswa\JurusanController::class, 'index'])->name('siswa.jurusan');
    Route::get('/siswa/berita', [siswa\BeritaController::class, 'index'])->name('siswa.berita');
    Route::get('/siswa/berita/beritadetail/{id}', [siswa\BeritaController::class, 'detail'])->name('siswa.berita.detail');
    Route::get('/siswa/galeri', [siswa\GaleriController::class, 'index'])->name('siswa.galeri');
    Route::get('/siswa/kontak', [siswa\KontakController::class, 'index'])->name('siswa.kontak');
    Route::post('/siswa/kontak', [siswa\KontakController::class, 'store'])->name('siswa.kontak.store');
    Route::get('/siswa/tentang', [siswa\TentangController::class, 'index'])->name('siswa.tentang');
    Route::get('/siswa/pendaftaran', [siswa\PendaftaranController::class, 'index'])->name('siswa.pendaftaran');

    Route::post('/siswa/pendaftaran', [siswa\PendaftaranController::class, 'store'])->name('siswa.pendaftaran.store');
    Route::get('/siswa/pengumuman', [siswa\PengumumanController::class, 'index'])->name('siswa.pengumuman');

    Route::get('/siswa/registrasi', [siswa\RegistrasiController::class, 'index'])->name('siswa.registrasi');
    Route::post('/siswa/registrasi', [siswa\RegistrasiController::class, 'store'])->name('siswa.registrasi.store');

    Route::get('/siswa/profil', [siswa\ProfilController::class, 'index'])->name('siswa.profil');
//siswa profil edit pendaftaran
    Route::get('/siswa/edit_pendaftaran/{id}', [siswa\ProfilController::class, 'edit_pendaftaran'])->name('siswa.edit_pendaftaran');
    Route::post('/siswa/edit_pendaftaran/update/{id}', [siswa\ProfilController::class, 'update'])->name('siswa.edit_pendaftaran.update');
//siswa profil edit registrasi
    Route::get('/siswa/edit_registrasi/{id}', [siswa\ProfilController::class, 'edit_registrasi'])->name('siswa.edit_registrasi');
    Route::post('/siswa/edit_registrasi/update/{id}', [siswa\ProfilController::class, 'update_registrasi    '])->name('siswa.edit_registrasi.update');
});
