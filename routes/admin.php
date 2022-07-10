<?php

use App\Http\Controllers\Admin\Master\PresensiController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    require base_path('vendor/laravel/fortify/routes/routes.php');
    Route::resource('/setting', 'SettingController');


    Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
        Route::get('/', function () {
            return redirect(route('admin.dashboard'));
        });

        Route::view('/dashboard', 'pages.admin.dashboard')->name('dashboard');


        // Route::resource('/mahasiswa', 'MahasiswaController');
        // Route::get('/pages/user/mahasiswa/edit/{mahasiswa}', 'MahasiswaController@edit');

        // Route::resource('info', 'InfoController');
        // Route::resource('prodi', 'ProdiController');
        // Route::resource('status', 'StatusController');

        // Route::resource('/admin', 'AdminController');
        // Route::resource('/user', 'UserController');
        // Route::resource('/orang-hilang', 'OrangHilangController');
        // Route::group(['prefix' => '/kehilangan', 'as' => 'kehilangan.'], function () {
        //     Route::get('/lampiran-dokumen', 'KehilanganBarangController@getLampiranDokumen')->name('lampiran-dokumen');
        //     Route::resource('/', 'KehilanganBarangController')->parameter('', 'kehilangan');
        // });

        Route::group(['prefix' => '/master-data', 'as' => 'master-data.', 'namespace' => 'Master'], function () {
            Route::resource('agama', 'AgamaController');
            // Route::resource('fakultas', 'FakultasController');
            // Route::resource('slider', 'SliderController');
            // Route::get('file-upload', [ TugasController::class, 'Tugas' ])->name('file.upload');
            // Route::post('file-upload', [ TugasController::class, 'Tugas' ])->name('file.upload.post');
            // Route::resource('tahun', 'TahunController');
            Route::resource('pekerjaan', 'PekerjaanController');
            Route::resource('status-kawin', 'StatusKawinController');
            Route::resource('pendidikan', 'PendidikanController');
            Route::resource('siswa', 'siswaController');
            Route::resource('guru', 'GuruController');
            Route::resource('kelas', 'KelasController');
            Route::resource('mapel', 'MapelController');
            Route::resource('materi', 'MateriController');
            Route::resource('diskusi', 'DiskusiController');
            Route::resource('tugas', 'TugasController');
            Route::resource('ujian', 'UjianController');
            Route::resource('fakultas', 'FakultasController');
            Route::resource('jurusan', 'JurusanController');
            Route::resource('tmpresensi', 'PresensiController');
            //presensi
            Route::get('data-absensi',[PresensiController::class,'index']);
            Route::get('editAbsen{id}',[PresensiController::class,'editAbsen']);
            Route::post('buatAbsen',[PresensiController::class,'buatAbsen']);
            Route::delete('hapusAbsen{id}',[PresensiController::class,'hapusAbsen']);
            Route::get('rekapAbsen{id}',[PresensiController::class,'rekapAbsen']);

        });

        // //upload
        // Route::get('/upload', 'TugasController@upload');
        // Route::post('/upload/proses', 'TugasController@proses_upload');

        // //coba upload 2
        // Route::get('/uploads', 'TugasController@upload')->name('uploads');
        // Route::post('/save','TugasController@proses_upload')->name('uploads.store');

        // //upload 3
        // Route::get('/upload', 'TugasController@index');
        // Route::post('/upload/proses', 'TugasController@store');

        // // tambahan
        // Route::resource('/gelombang', 'GelombangController');
        // Route::resource('/pendaftar', 'PendaftarController');
    });
});
