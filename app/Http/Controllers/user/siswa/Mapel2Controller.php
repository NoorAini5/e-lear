<?php

namespace App\Http\Controllers\user\siswa;

use App\Http\Controllers\Controller;
use App\Models\Diskusi;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Materi;
use App\Models\Presensi;
use App\Models\SiswaUjian;
use App\Models\tm_presensi;
use App\Models\Tugas;
use App\Models\Ujian;
use App\Models\UjianSoal;
use App\Models\UjianSoalJawaban;

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
        $presensis=Presensi::where('mapel', $id)->where('user_id',auth()->user()->id)->get();
        $tugass=Tugas::where('mapel', $id)->get();
        $ujians=Ujian::where('mapel_id', $id)->get();

        $id_mapel=$id;
        // dd(['id_mapel' => $id_mapel, 'materis' => $materis, 'diskusis'=>$diskusis,'tugass'=>$tugass,'ujians'=>$ujians,'presensis'=>$presensis,'mapel'=>$mapel]);
        // dd($mapels);
        return view('pages.admin.user.materi.index',['id_mapel' => $id_mapel, 'materis' => $materis, 'diskusis'=>$diskusis,'tugass'=>$tugass,'ujians'=>$ujians,'presensis'=>$presensis,'mapel'=>$mapel]);
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

    public function ujian($id)
    {
        $user = auth()->user();
        $ujian = Ujian::with('soal','soal.jawaban')->find($id);
        $ujian_mulai = SiswaUjian::where(['user_id' => $user->id,'ujian_id' => $id])->count();
        if($ujian_mulai)
        {
            return view('pages.admin.user.materi.ujian-view',['ujian' => $ujian]);
        }
        return view('pages.admin.user.materi.ujian-mulai',['ujian' => $ujian]);
    }

    public function ujianStore(Request $request)
    {
        $request->validate([
            'ujian_id' => 'required|exists:App\Models\Ujian,id',
            'soal' => 'required|array',
            'soal.*.id' => 'required|exists:App\Models\UjianSoal,id',
            'soal.*.jawaban' => 'required|exists:App\Models\UjianSoalJawaban,id'
        ]);

        $user = auth()->user();

        $ujian = Ujian::find($request->ujian_id);

        $siswa_ujian = [];

        foreach($request->input('soal') as $key){
            $soal = UjianSoalJawaban::find($key['jawaban']);
            $siswa_ujian[] = [
                'user_id' => $user->id,
                'ujian_id' => $request->ujian_id,
                'ujian_soal_id' => $key['id'],
                'ujian_soal_jawaban_id' => $key['jawaban'],
                'benar' => $soal->benar
            ];
        }

        $sv = SiswaUjian::insert($siswa_ujian);
        if($sv)
        {
            return redirect()->route('user.mapel2.show',$ujian->mapel_id)->withToastSuccess('Berhasil menyelesaikan ujian');
        }

        return redirect()->route('user.mapel2.show',$ujian->mapel_id)->withToastError('Gagal menyelesaikan ujian');
    }

}




