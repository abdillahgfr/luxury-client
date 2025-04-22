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

Auth::routes();

// Route::get('/clear', function() {
// Artisan::call('migrate');
// Artisan::call('config:cache');
// Artisan::call('view:clear');
// return "Cleared!";
// });

Route::get('/clear', function() {

Artisan::call('config:cache');
Artisan::call('config:clear');
Artisan::call('view:clear');
return "Cleared!";
});


Route::namespace('Home')->group(function() {

    Route::get('/', [App\Http\Controllers\FrontendController\HomeController::class, 'index'])->name('fe-home');
    Route::post('po-home', [App\Http\Controllers\FrontendController\HomeController::class, 'sendPo'])->name('fe-po-home');
   
    Route::get('about', [App\Http\Controllers\FrontendController\TentangController::class, 'index'])->name('fe-tentang');
    Route::get('services', [App\Http\Controllers\FrontendController\ServicesController::class, 'index'])->name('fe-services');

    Route::get('gallery', [App\Http\Controllers\FrontendController\GaleriController::class, 'index'])->name('fe-gallery');
    
    Route::get('book', [App\Http\Controllers\FrontendController\KontakController::class, 'index'])->name('fe-kontak');
    
    Route::get('pendaftaran-bimtek-online', [App\Http\Controllers\FrontendController\BimtekPendaftaranController::class, 'online'])->name('fe-pendaftaran');
    Route::get('pendaftaran-bimtek', [App\Http\Controllers\FrontendController\BimtekPendaftaranController::class, 'pendaftaranBimtek'])->name('fe-pendaftaranbimtek');
    Route::get('pendaftaran-bimtek-group', [App\Http\Controllers\FrontendController\BimtekPendaftaranController::class, 'pendaftaranGroup'])->name('fe-pendaftarangroup');
    Route::get('booking-success/{id}', [App\Http\Controllers\FrontendController\HomeController::class, 'success'])->name('fe-success');
    Route::post('pendaftaran-submit', [App\Http\Controllers\FrontendController\BimtekPendaftaranController::class, 'sendPo'])->name('fe-pendaftarangroup-submit');
    Route::get('booking-success/report-print/{id}', [App\Http\Controllers\FrontendController\HomeController::class, 'reportBookingPrint'])->name('booking-report-print');


    Route::get('feed', [App\Http\Controllers\FrontendController\SeoController::class, 'feed'])->name('fe-feed');
    Route::get('sitemap.xml', [App\Http\Controllers\FrontendController\SeoController::class, 'sitemap'])->name('fe-sitemap');
});





Route::group(['middleware' => 'auth'], function () {
    
    Route::get('admin/dashboard', [App\Http\Controllers\BackendController\DashboardController::class, 'dashboard'])->name('adminDashboard');
    
    Route::get('admin/data-pengguna', [App\Http\Controllers\BackendController\DataPenggunaController::class, 'dataPengguna'])->name('adminPengguna');
    Route::get('admin/data-pengguna/add', [App\Http\Controllers\BackendController\DataPenggunaController::class, 'add'])->name('adminAddPengguna');
    Route::post('admin/data-pengguna/add/data', [App\Http\Controllers\BackendController\DataPenggunaController::class, 'addData'])->name('adminAddDataPengguna');
    Route::get('admin/data-pengguna/edit/{id}', [App\Http\Controllers\BackendController\DataPenggunaController::class, 'edit'])->name('adminEditPengguna');
    Route::post('admin/data-pengguna/edit/data/{id}', [App\Http\Controllers\BackendController\DataPenggunaController::class, 'editData'])->name('adminEditDataPengguna');
    Route::get('admin/data-pengguna/show/{id}', [App\Http\Controllers\BackendController\DataPenggunaController::class, 'show'])->name('adminShowPengguna');
    Route::get('admin/data-pengguna/delete/{id}', [App\Http\Controllers\BackendController\DataPenggunaController::class, 'delete'])->name('adminDeletePengguna');

    Route::get('admin/data-materi', [App\Http\Controllers\BackendController\DataMateriController::class, 'dataMateri'])->name('adminMateri');
    Route::get('admin/data-materi/add', [App\Http\Controllers\BackendController\DataMateriController::class, 'add'])->name('adminAddMateri');
    Route::post('admin/data-materi/add/data', [App\Http\Controllers\BackendController\DataMateriController::class, 'addData'])->name('adminAddDataMateri');
    Route::get('admin/data-materi/edit/{id}', [App\Http\Controllers\BackendController\DataMateriController::class, 'edit'])->name('adminEditMateri');
    Route::post('admin/data-materi/edit/data/{id}', [App\Http\Controllers\BackendController\DataMateriController::class, 'editData'])->name('adminEditDataMateri');
    Route::get('admin/data-materi/show/{id}', [App\Http\Controllers\BackendController\DataMateriController::class, 'show'])->name('adminShowMateri');
    Route::get('admin/data-materi/delete/{id}', [App\Http\Controllers\BackendController\DataMateriController::class, 'delete'])->name('adminDeleteMateri');
  
    Route::get('admin/data-jadwal', [App\Http\Controllers\BackendController\DataJadwalController::class, 'dataJadwal'])->name('adminJadwal');
    Route::get('admin/data-jadwal/add', [App\Http\Controllers\BackendController\DataJadwalController::class, 'add'])->name('adminAddJadwal');
    Route::post('admin/data-jadwal/add/data', [App\Http\Controllers\BackendController\DataJadwalController::class, 'addData'])->name('adminAddDataJadwal');
    Route::get('admin/data-jadwal/edit/{id}', [App\Http\Controllers\BackendController\DataJadwalController::class, 'edit'])->name('adminEditJadwal');
    Route::post('admin/data-jadwal/edit/data/{id}', [App\Http\Controllers\BackendController\DataJadwalController::class, 'editData'])->name('adminEditDataJadwal');
    Route::get('admin/data-jadwal/show/{id}', [App\Http\Controllers\BackendController\DataJadwalController::class, 'show'])->name('adminShowJadwal');
    Route::get('admin/data-jadwal/delete/{id}', [App\Http\Controllers\BackendController\DataJadwalController::class, 'delete'])->name('adminDeleteJadwal');
    
    Route::get('admin/data-galeri', [App\Http\Controllers\BackendController\DataGaleriController::class, 'dataGaleri'])->name('adminGaleri');
    Route::get('admin/data-galeri/add', [App\Http\Controllers\BackendController\DataGaleriController::class, 'add'])->name('adminAddGaleri');
    Route::post('admin/data-galeri/add/data', [App\Http\Controllers\BackendController\DataGaleriController::class, 'addData'])->name('adminAddDataGaleri');
    Route::get('admin/data-galeri/delete/{id}', [App\Http\Controllers\BackendController\DataGaleriController::class, 'delete'])->name('adminDeleteGaleri');
    
    //CRUD Blog
    Route::get('admin/data-blog', [App\Http\Controllers\BackendController\BlogsController::class, 'index'])->name('be-blog');
    Route::get('admin/data-blog/add', [App\Http\Controllers\BackendController\BlogsController::class, 'add'])->name('be-blog-add');
    Route::post('admin/data-blog/add-data', [App\Http\Controllers\BackendController\BlogsController::class, 'addData'])->name('adminAddDataBlog');
    Route::get('admin/data-blog/edit/{id}', [App\Http\Controllers\BackendController\BlogsController::class, 'edit'])->name('be-blog-edit');
    Route::post('admin/data-blog/edit-data/{id}', [App\Http\Controllers\BackendController\BlogsController::class, 'editData'])->name('be-blog-editData');
    Route::get('admin/data-blog/delete/{id}', [App\Http\Controllers\BackendController\BlogsController::class, 'delete'])->name('be-blog-delete');

    
    Route::get('admin/data-kontak', [App\Http\Controllers\BackendController\DataKontakController::class, 'dataKontak'])->name('adminKontak');
    Route::get('admin/data-kontak/show/{id}', [App\Http\Controllers\BackendController\DataKontakController::class, 'show'])->name('adminShowKontak');
    Route::get('admin/data-kontak/delete/{id}', [App\Http\Controllers\BackendController\DataKontakController::class, 'delete'])->name('adminDeleteKontak');
    
    Route::get('admin/data-po', [App\Http\Controllers\BackendController\DataPOController::class, 'dataPO'])->name('adminPO');
    Route::get('admin/data-po/show/{id}', [App\Http\Controllers\BackendController\DataPOController::class, 'show'])->name('adminShowPO');
    Route::get('admin/data-po/delete/{id}', [App\Http\Controllers\BackendController\DataPOController::class, 'delete'])->name('adminDeletePO');
    Route::get('admin/data-po/edit/{id}', [App\Http\Controllers\BackendController\DataPOController::class, 'edit'])->name('adminEditBooking');
    Route::post('admin/data-po/edit/data/{id}', [App\Http\Controllers\BackendController\DataPOController::class, 'editData'])->name('adminEditDataBooking');
    Route::get('admin/data-po/report-print/{id}', [App\Http\Controllers\BackendController\DataPOController::class, 'reportPrint'])->name('report-print');

    
});



