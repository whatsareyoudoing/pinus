<?php
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
/*  Route::get('/', function () {
     return view('welcome');
 });
 */
/* FRONT END */
// Home
Route::get('/', 'App\Http\Controllers\Home@index')->name('beranda');
Route::get('home', 'App\Http\Controllers\Home@index');
Route::get('tentang', 'App\Http\Controllers\Home@info')->name('tentang');
Route::get('kontak', 'App\Http\Controllers\Home@kontak');

//tentang
Route::get('/tentang/visimisi', 'App\Http\Controllers\About@visiMisi')->name('visimisi');
Route::get('/tentang/tim', 'App\Http\Controllers\About@tim')->name('tim');
Route::get('/tentang/good-governance', 'App\Http\Controllers\About@goodGovernance')->name('good-governance');
//publikasi
Route::get('/publikasi/video', 'App\Http\Controllers\Publikasi@video')->name('video');
Route::get('/publikasi/video/detail', 'App\Http\Controllers\Publikasi@videoDetail')->name('video-detail');
Route::get('/publikasi/policy', 'App\Http\Controllers\Publikasi@policy')->name('policy');
Route::get('/publikasi/good-governance', 'App\Http\Controllers\Publikasi@goodGovernance')->name('good-governance');
// Login
Route::get('login', 'App\Http\Controllers\Login@index');
Route::post('login/check', 'App\Http\Controllers\Login@check');
Route::get('login/forgot', 'App\Http\Controllers\Login@lupa');
Route::get('login/logout', 'App\Http\Controllers\Login@logout');
// Berita
Route::get('berita', 'App\Http\Controllers\Berita@index')->name('berita');
Route::get('berita/cari', 'App\Http\Controllers\Berita@cari')->name('cari-berita');
Route::get('berita/read/{par1}', 'App\Http\Controllers\Berita@read');
Route::get('berita/kategori/{par1}', 'App\Http\Controllers\Berita@kategori');
//event
Route::get('event', 'App\Http\Controllers\Event@index')->name('event');
Route::get('event/cari', 'App\Http\Controllers\Event@cari')->name('cari-event');
Route::get('event/read/{par1}', 'App\Http\Controllers\Event@read');
Route::get('event/kategori/{par1}', 'App\Http\Controllers\Event@kategori');
//dokumen
Route::get('dokumen', 'App\Http\Controllers\Download@index')->name('dokumen');
Route::get('dokumen/cari', 'App\Http\Controllers\Download@cari')->name('cari-dokumen');
Route::get('dokumen/modul', 'App\Http\Controllers\Download@modul')->name('modul');
Route::get('dokumen/modul/detail', 'App\Http\Controllers\Download@modulDetail')->name('modul-detail');
// Route::get('dokumen/modul/cari', 'App\Http\Controllers\Download@modulCari')->name('cari-modul');

//layanan
Route::get('layanan/pelatihan', 'App\Http\Controllers\Layanan@pelatihanSar')->name('pelatihan');
Route::get('layanan/pelatihan/detail', 'App\Http\Controllers\Layanan@pelatihanSarDetail')->name('pelatihan-detail');
Route::get('layanan/produk', 'App\Http\Controllers\Layanan@produk')->name('produk');
Route::get('layanan/produk/detail', 'App\Http\Controllers\Layanan@produkDetail')->name('produk-detail');

//kontak
Route::get('kontak', 'App\Http\Controllers\Kontak@index')->name('kontak');
// Route::get('konfirmasi', 'App\Http\Controllers\Home@konfirmasi');
// Route::get('pembayaran', 'App\Http\Controllers\Home@pembayaran');
// Route::post('proses_pemesanan', 'App\Http\Controllers\Home@proses_pemesanan');
// Route::get('berhasil/{par1}', 'App\Http\Controllers\Home@berhasil');
// Route::get('cetak/{par1}', 'App\Http\Controllers\Home@cetak');
// Route::get('aksi', 'App\Http\Controllers\Aksi@index');
// Route::get('aksi/status/{par1}', 'App\Http\Controllers\Aksi@status');
// Route::get('berita/layanan/{par1}', 'App\Http\Controllers\Berita@layanan');
// Route::get('berita/terjadi/{par1}', 'App\Http\Controllers\Berita@terjadi');
// Akreditasi
// Route::get('provider-akreditasi', 'App\Http\Controllers\Akreditasi@index');
// Route::get('akreditasi/read/{par1}', 'App\Http\Controllers\Akreditasi@read');
// Route::get('layanan/{par1}', 'App\Http\Controllers\Akreditasi@layanan');
// Route::get('layanan/{par1}', 'App\Http\Controllers\Berita@layanan');
// Route::get('akreditasi/kategori/{par1}', 'App\Http\Controllers\Akreditasi@kategori');
// // project
// Route::get('project', 'App\Http\Controllers\Download@index');
// Route::get('project/unduh/{par1}', 'App\Http\Controllers\Download@unduh');
// Route::get('project/kategori/{par1}', 'App\Http\Controllers\Download@kategori');

// Route::get('dokumen/detail/{par1}/{par2}', 'App\Http\Controllers\Download@detail');
// Route::get('project/detail/{par1}/{par2}', 'App\Http\Controllers\Download@detail');
// // galeri
// Route::get('galeri', 'App\Http\Controllers\Galeri@index');
// Route::get('galeri/detail/{par1}', 'App\Http\Controllers\Galeri@detail');
// // video
// Route::get('video', 'App\Http\Controllers\Video@index');
// Route::get('video/detail/{par1}', 'App\Http\Controllers\Video@detail');
// Route::get('webinar', 'App\Http\Controllers\Video@index');
// Route::get('webinar/detail/{par1}/{par2}', 'App\Http\Controllers\Video@detail');
// // Proyek
// Route::get('proyek', 'App\Http\Controllers\Proyek@index');
// Route::get('proyek/kategori/{par1}', 'App\Http\Controllers\Proyek@kategori');
// Route::get('proyek/detail/{par1}', 'App\Http\Controllers\Proyek@detail');
// Route::get('proyek/cetak/{par1}', 'App\Http\Controllers\Proyek@cetak');
/* END FRONT END */

/* BACK END BARU */
    // dasbor
Route::get('admin/dasbor', 'App\Http\Controllers\Admin\Dasbor@index');
Route::get('admin/dasbor/konfigurasi', 'App\Http\Controllers\Admin\Dasbor@konfigurasi');

Route::post('admin/upload/content', 'App\Http\Controllers\Admin\UploadContent@main')->name('upload-content');

// Login
Route::get('login', 'App\Http\Controllers\Login@index');
Route::post('login/check', 'App\Http\Controllers\Login@check');
Route::get('login/forgot', 'App\Http\Controllers\Login@fogot');
Route::get('login/logout', 'App\Http\Controllers\Login@logout');

    // berita
Route::get('admin/berita', 'App\Http\Controllers\Admin\Berita@index');
Route::get('admin/berita/tambah', 'App\Http\Controllers\Admin\Berita@tambah');
Route::post('admin/berita/tambah_proses', 'App\Http\Controllers\Admin\Berita@tambah_proses');
Route::get('admin/berita/cari', 'App\Http\Controllers\Admin\Berita@cari');
Route::get('admin/berita/kategori/{par1}', 'App\Http\Controllers\Admin\Berita@kategori');
Route::get('admin/berita/author/{par1}', 'App\Http\Controllers\Admin\Berita@author');
Route::get('admin/berita/edit/{par1}', 'App\Http\Controllers\Admin\Berita@edit');
Route::post('admin/berita/edit_proses', 'App\Http\Controllers\Admin\Berita@edit_proses');
Route::get('admin/berita/delete/{par1}/{par2}', 'App\Http\Controllers\Admin\Berita@delete');
Route::get('admin/berita/status_berita/{par1}', 'App\Http\Controllers\Admin\Berita@status_berita');

// kategori berita
Route::get('admin/kategori', 'App\Http\Controllers\Admin\Kategori@index');
Route::post('admin/kategori/tambah', 'App\Http\Controllers\Admin\Kategori@tambah');
Route::post('admin/kategori/edit', 'App\Http\Controllers\Admin\Kategori@edit');
Route::get('admin/kategori/delete/{par1}', 'App\Http\Controllers\Admin\Kategori@delete');


// agenda
Route::get('admin/agenda', 'App\Http\Controllers\Admin\Agenda@index');
Route::get('admin/agenda/cari', 'App\Http\Controllers\Admin\Agenda@cari');
Route::get('admin/agenda/status_agenda/{par1}', 'App\Http\Controllers\Admin\Agenda@status_agenda');
Route::get('admin/agenda/kategori/{par1}', 'App\Http\Controllers\Admin\Agenda@kategori');
Route::get('admin/agenda/author/{par1}', 'App\Http\Controllers\Admin\Agenda@author');
Route::get('admin/agenda/tambah', 'App\Http\Controllers\Admin\Agenda@tambah');
Route::get('admin/agenda/edit/{par1}', 'App\Http\Controllers\Admin\Agenda@edit');
Route::get('admin/agenda/delete/{par1}', 'App\Http\Controllers\Admin\Agenda@delete');
Route::post('admin/agenda/tambah_proses', 'App\Http\Controllers\Admin\Agenda@tambah_proses');
Route::post('admin/agenda/edit_proses', 'App\Http\Controllers\Admin\Agenda@edit_proses');


// kategori agenda
Route::get('admin/kategori_agenda', 'App\Http\Controllers\Admin\Kategori_agenda@index');
Route::post('admin/kategori_agenda/tambah', 'App\Http\Controllers\Admin\Kategori_agenda@tambah');
Route::post('admin/kategori_agenda/edit', 'App\Http\Controllers\Admin\Kategori_agenda@edit');
Route::get('admin/kategori_agenda/delete/{par1}', 'App\Http\Controllers\Admin\Kategori_agenda@delete');

Route::middleware(['cek.level:admin'])->group(function () {

// mitra

Route::get('admin/mitra', 'App\Http\Controllers\Admin\Mitra@index');
Route::get('admin/mitra/cari', 'App\Http\Controllers\Admin\Mitra@cari');
Route::get('admin/mitra/status_mitra/{par1}', 'App\Http\Controllers\Admin\Mitra@status_mitra');
Route::get('admin/mitra/kategori/{par1}', 'App\Http\Controllers\Admin\Mitra@kategori');
Route::get('admin/mitra/author/{par1}', 'App\Http\Controllers\Admin\Mitra@author');
Route::get('admin/mitra/tambah', 'App\Http\Controllers\Admin\Mitra@tambah');
Route::get('admin/mitra/edit/{par1}', 'App\Http\Controllers\Admin\Mitra@edit');
Route::get('admin/mitra/delete/{par1}', 'App\Http\Controllers\Admin\Mitra@delete');
Route::post('admin/mitra/tambah_proses', 'App\Http\Controllers\Admin\Mitra@tambah_proses');
Route::post('admin/mitra/edit_proses', 'App\Http\Controllers\Admin\Mitra@edit_proses');


// user
Route::get('admin/user', 'App\Http\Controllers\Admin\User@index');
Route::post('admin/user/tambah', 'App\Http\Controllers\Admin\User@tambah');
Route::get('admin/user/edit/{par1}', 'App\Http\Controllers\Admin\User@edit');
Route::post('admin/user/proses_edit', 'App\Http\Controllers\Admin\User@proses_edit');
Route::get('admin/user/delete/{par1}', 'App\Http\Controllers\Admin\User@delete');
Route::post('admin/user/proses', 'App\Http\Controllers\Admin\User@proses');
// konfigurasi
Route::get('admin/konfigurasi', 'App\Http\Controllers\Admin\Konfigurasi@index');
Route::get('admin/konfigurasi/logo', 'App\Http\Controllers\Admin\Konfigurasi@logo');
Route::get('admin/konfigurasi/profil', 'App\Http\Controllers\Admin\Konfigurasi@profil');
Route::get('admin/konfigurasi/icon', 'App\Http\Controllers\Admin\Konfigurasi@icon');
Route::get('admin/konfigurasi/email', 'App\Http\Controllers\Admin\Konfigurasi@email');
Route::get('admin/konfigurasi/gambar', 'App\Http\Controllers\Admin\Konfigurasi@gambar');

Route::post('admin/konfigurasi/proses', 'App\Http\Controllers\Admin\Konfigurasi@proses');
Route::post('admin/konfigurasi/proses_logo', 'App\Http\Controllers\Admin\Konfigurasi@proses_logo');
Route::post('admin/konfigurasi/proses_icon', 'App\Http\Controllers\Admin\Konfigurasi@proses_icon');
Route::post('admin/konfigurasi/proses_email', 'App\Http\Controllers\Admin\Konfigurasi@proses_email');
Route::post('admin/konfigurasi/proses_gambar', 'App\Http\Controllers\Admin\Konfigurasi@proses_gambar');

Route::post('admin/konfigurasi/proses_profil', 'App\Http\Controllers\Admin\Konfigurasi@proses_profil');


// galeri depan
Route::get('admin/galeri', 'App\Http\Controllers\Admin\Galeri@index');
Route::get('admin/galeri/cari', 'App\Http\Controllers\Admin\Galeri@cari');
Route::get('admin/galeri/status_galeri/{par1}', 'App\Http\Controllers\Admin\Galeri@status_galeri');
Route::get('admin/galeri/kategori/{par1}', 'App\Http\Controllers\Admin\Galeri@kategori');
Route::get('admin/galeri/tambah', 'App\Http\Controllers\Admin\Galeri@tambah');
Route::get('admin/galeri/edit/{par1}', 'App\Http\Controllers\Admin\Galeri@edit');
Route::get('admin/galeri/delete/{par1}', 'App\Http\Controllers\Admin\Galeri@delete');
Route::post('admin/galeri/tambah_proses', 'App\Http\Controllers\Admin\Galeri@tambah_proses');
Route::post('admin/galeri/edit_proses', 'App\Http\Controllers\Admin\Galeri@edit_proses');
Route::post('admin/galeri/proses', 'App\Http\Controllers\Admin\Galeri@proses');


// download
Route::get('admin/project', 'App\Http\Controllers\Admin\Download@index');
Route::get('admin/project/cari', 'App\Http\Controllers\Admin\Download@cari');
Route::get('admin/project/status_project/{par1}', 'App\Http\Controllers\Admin\Download@status_download');
Route::get('admin/project/kategori/{par1}', 'App\Http\Controllers\Admin\Download@kategori');
Route::get('admin/project/tambah', 'App\Http\Controllers\Admin\Download@tambah');
Route::get('admin/project/edit/{par1}', 'App\Http\Controllers\Admin\Download@edit');
Route::get('admin/project/unduh/{par1}', 'App\Http\Controllers\Admin\Download@unduh');
Route::get('admin/project/delete/{par1}', 'App\Http\Controllers\Admin\Download@delete');
Route::post('admin/project/tambah_proses', 'App\Http\Controllers\Admin\Download@tambah_proses');
Route::post('admin/project/edit_proses', 'App\Http\Controllers\Admin\Download@edit_proses');
Route::post('admin/project/proses', 'App\Http\Controllers\Admin\Download@proses');

/* END BACK END*/

Route::get('myview-home', function () {
    return view('myview/home');
});
Route::get('myview-berita', function () {
    return view('myview/berita');
});
Route::get('myview-event', function () {
    return view('myview/event');
})->name('event');
});
