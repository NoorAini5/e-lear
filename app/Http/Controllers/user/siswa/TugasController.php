<?php

namespace App\Http\Controllers\user\siswa;

use App\Http\Controllers\Controller;
use App\Models\JawabanTugas;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugass=Tugas::get();
        return view('pages.admin.user.materi.tugas',['tugass' => $tugass]);
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
        $jawabantugas=JawabanTugas::orderBy('created_at','desc')->where('id_tugas',$id)->get();
        $jumlah = JawabanTugas::where('id_tugas',$id)->count('id_tugas');
        $tugas=Tugas::findOrFail($id);
        return view('pages.admin.user.materi.tugas',['tugas' => $tugas,'id'=>$id,'jumlah'=>$jumlah,'jawabantugas'=>$jawabantugas]);
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
