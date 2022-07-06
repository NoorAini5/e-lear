<?php

namespace App\Http\Controllers\user\siswa;

use App\Http\Controllers\Controller;
use App\Models\Diskusi;
use App\Models\JawabanDiskusi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Files\Disk;

class DiskusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawabandiskusis=JawabanDiskusi::get();
        return view('pages.admin.user.materi.diskusi',['jawabandiskusis' => $jawabandiskusis]);
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
        $jawaban = $request->jawaban;
        $jawabann=JawabanDiskusi::where('jawaban',$jawaban);
        return view('pages.admin.user.materi.diskusi',['jawabann'=>$jawabann,'jawaban'=>$jawaban]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $jawabandiskusi=JawabanDiskusi::get();
        $jawaban=JawabanDiskusi::all();
        // $jawabann=JawabanDiskusi::where('id_diskusi',$id)->get();
        // $materis=Materi::where('matkul', $id)->get();
        // $diskusi=Diskusi::findOrFail($id);
        // dd($materis);
        return view('pages.admin.user.materi.diskusi',['jawaban'=>$jawaban]);

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
}
