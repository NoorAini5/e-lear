<?php

use App\Http\Controllers\Admin\Master\MapelController;
use App\Http\Controllers\user\siswa\Mapel2Controller;
use App\Http\Controllers\user\siswa\MateriController;
use Illuminate\Support\Facades\Route;


Route::get('/token', function () {
    return csrf_token();
});

Route::group(['middleware' => 'auth:web', 'as' => 'user.'], function () {
    Route::view('/', 'home')->name('home');

    Route::group(['namespace' => 'User'], function () {
    Route::resource('mapel', 'siswa\MapelController');
    // Route::get('diskusi/{id}', 'siswa\Mapel2Controller@tampildiskusi');
    Route::get('mapel2/ujian/{id}', [Mapel2Controller::class,'ujian'])->name('mapel2.ujian');
    Route::resource('mapel2', 'siswa\Mapel2Controller');
    Route::post('mapel2/ujian', [Mapel2Controller::class,'ujianStore'])->name('mapel2.ujian.store');
    Route::resource('materi', 'siswa\MateriController');
    Route::resource('diskusi', 'siswa\DiskusiController');
    Route::resource('tugas', 'siswa\TugasController');
    // Route::resource('jawabandiskusi', 'siswa\JawabanDiskusiController');
    // Route::post('jawabandiskusi', 'siswa\JawabanDiskusiController');
    Route::resource('fakultas', 'siswa\FakultasController');
    Route::resource('jurusan', 'siswa\JurusanController');
    Route::get('/downloadMateri/{nama_file}', [MateriController::class, 'downloadMateri']);
    Route::post('jawabandiskusi/{id}', 'siswa\MateriController@jawabanDiskusi')->name('jawabandiskusi.jawabanDiskusi');
    Route::get('jawabandiskusi/{id}', 'siswa\MateriController@jawabanDiskusi')->name('jawabandiskusi.jawabanDiskusi');
    Route::post('jawabantugas/{id}', 'siswa\MateriController@jawabanTugas')->name('jawabantugas.jawabanTugas');

//presensi
        // Route::get('absensi-siswa',[PresensiController::class,'absensiSiswa']);
        // Route::get('rekap-absenSiswa',[PresensiController::class,'rekapAbsenPegawai']);
        // Route::get('absen{id}',[PresensiController::class,'absenSiswa']);
        // Route::get('simpanAbsen{id}',[PresensiController::class,'simpanAbsen']);
        // Route::get('detailAbsen{id}',[PresensiController::class,'detailAbsen']);

    // Route::get('/materi', function(){
    //     return view('pages.admin.user.materi.materi');
    // });
    // Route::resource('tampilmateri', 'siswa\MateriController@show');
    // Route::post('getMapel/{id}', 'siswa\Mapel2Controller@indexs');
    // Route::get('mapel2/{id}',[Mapel2Controller::class,'index'])->name('index');
    // Route::get('mapel2/{id}', [Mapel2Controller::class, 'show'])->name('show');
});
});



require __DIR__ . '/demo.php';
