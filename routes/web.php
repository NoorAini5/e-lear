<?php

use App\Http\Controllers\Admin\Master\MapelController;
use App\Http\Controllers\user\siswa\Mapel2Controller;
use App\Http\Controllers\user\siswa\MateriController;
use App\Http\Controllers\Admin\Master\PresensiController;
use App\Http\Controllers\Admin\Master\TugasController;
use Illuminate\Support\Facades\Route;


Route::get('/token', function () {
    return csrf_token();
});

Route::group(['middleware' => 'auth:web', 'as' => 'user.'], function () {
    // Route::view('/', 'home')->name('home');
    Route::resource('/','Admin\DashboardController');

    Route::group(['namespace' => 'User'], function () {
    Route::resource('mapel', 'siswa\MapelController');
    Route::resource('mapel2', 'siswa\Mapel2Controller');
    Route::post('mapel2/ujian', [Mapel2Controller::class,'ujianStore'])->name('mapel2.ujian.store');
    Route::get('mapel2/ujian/{id}', [Mapel2Controller::class,'ujian'])->name('mapel2.ujian');
    Route::resource('materi', 'siswa\MateriController');
    Route::resource('diskusi', 'siswa\DiskusiController');
    Route::resource('tugas', 'siswa\TugasController');
    Route::resource('fakultas', 'siswa\FakultasController');
    Route::resource('jurusan', 'siswa\JurusanController');
    Route::get('/downloadMateri/{nama_file}', [MateriController::class, 'downloadMateri']);
    Route::post('jawabandiskusi/{id}', 'siswa\MateriController@jawabanDiskusi')->name('jawabandiskusi.jawabanDiskusi');
    Route::get('jawabandiskusi/{id}', 'siswa\MateriController@jawabanDiskusi')->name('jawabandiskusi.jawabanDiskusi');
    Route::post('jawabantugas/{id}', 'siswa\MateriController@jawabanTugas')->name('jawabantugas.jawabanTugas');
    Route::get('jawabantugas/{id}', 'siswa\MateriController@jawabanTugas')->name('jawabantugas.jawabanTugas');


    //presensi
    Route::get('presensiSiswa/{id}  ', [PresensiController::class, 'tampilPresensi']);
    Route::get('detailPresensi/{id}', [PresensiController::class, 'detailPresensi']);
    Route::put('simpanPresensi/{id}', [PresensiController::class, 'simpanPresensiUser']);

    //tugas
    Route::get('tugasSiswa/{id}  ', [TugasController::class, 'tampilTugas']);
    Route::get('detailTugas/{id}', [TugasController::class, 'detailTugas']);
    Route::put('simpanTugas/{id}', [TugasController::class, 'simpanTugasUser']);



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
