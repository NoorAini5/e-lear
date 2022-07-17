<?php

namespace App\Http\Controllers\user\siswa;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\JawabanDiskusi;
use App\Http\Controllers\Controller;
use App\Models\Diskusi;
use App\Models\JawabanTugas;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return view('pages.admin.user.materi.materi');

        $materii=Materi::get();
        return view('pages.admin.user.materi.index',['materii' => $materii]);
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
        // $id_mapel=$id;
        // dd($id_mapel);
        $materis=Materi::where('jurusan', $id)->get();
        $diskusis=Diskusi::where('judul', $id)->get();
        // dd($materis);
        return view('pages.admin.user.materi.index',['materis' => $materis,'diskusis'=>$diskusis]);
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
    public function update(Request $request, $id)
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

    public function downloadMateri($nama_materi){
        $filepath = public_path('materi' . '/' . $nama_materi);
        return Response()->download($filepath);
    }

    public function downloadVideo($video){
        $filepath = public_path('video' . '/' . $video);
        return Response()->download($filepath);
    }

    public function jawabanDiskusi(Request $request, $id)
    {

        $request->request->add(['user_id' => auth()->user()->id]);
        // $diskusi=Diskusi::findOrFail($id);
        $jawabandiskusi=JawabanDiskusi::create($request->all());
        // return view('pages.admin.user.materi.diskusi',['jawabandiskusi' => $jawabandiskusi,'diskusi'=>$diskusi]);
        return redirect()->route('user.diskusi.show',$id);


    }
    public function jawabanTugas(Request $request, $id)
    {
        $file = $request->file('jawaban');
            $jawaban = $file->getClientOriginalName();
            $file->move('jawabantugas', $jawaban);
            $validatedData['jawaban'] = $jawaban;

        $request->request->add(['user_id' => auth()->user()->id]);
        // $diskusi=Diskusi::findOrFail($id);
        $jawabantugas=JawabanTugas::create($request->all());
        return redirect()->route('user.tugas.show',$id);
    }
}
