<?php

namespace App\Http\Controllers\user\siswa;

use App\Http\Controllers\Controller;
use App\Models\Diskusi;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Materi;
use App\Models\tm_presensi;
use App\Models\Tugas;
use App\Models\Ujian;

class Mapel2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $mapels=Mapel::where('matkul', $id)->get();
        $mapel2=Mapel::get();
        return view('pages.admin.user.mapel2.index',['mapel2' => $mapel2]);
        // return view('pages.admin.user.mapel2.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mapel=Mapel::with(['Guru'])->where('id',$id)->first();
        $materis=Materi::where('matkul', $id)->get();
        $diskusis=Diskusi::where('mapel', $id)->get();
        $presensis=tm_presensi::where('mapel', $id)->get();
        $tugass=Tugas::where('mapel', $id)->get();
        $ujians=Ujian::where('mapel', $id)->get();
        $ujians=Ujian::where('mapel', $id)->get();
        $id_mapel=$id;
        // dd($mapels);
        return view('pages.admin.user.materi.index',['id_mapel' => $id_mapel, 'materis' => $materis, 'diskusis'=>$diskusis,'tugass'=>$tugass,'ujians'=>$ujians,'presensis'=>$presensis,'mapel'=>$mapel]);


        // $mapel2=Mapel::where('jurusan', $id)->get();
        // // dd($mapels);
        // return view('pages.admin.user.mapel2.index',['mapel2' => $mapel2]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function jurusan($id)
    {
        // dd(request()->all);
        $mapels=Mapel::where('jurusan', $id)->get();
        return view('pages.admin.user.mapel2.index',['mapels' => $mapels]);
    }


    // $jurusans=Jurusan::where('fakultas', $id)->get();
    // return view('pages.admin.user.jurusan.index',['jurusans' => $jurusans]);


}




