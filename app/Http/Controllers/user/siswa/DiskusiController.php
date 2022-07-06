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
        $diskusis=Diskusi::get();
        return view('pages.admin.user.materi.diskusi',['diskusis' => $diskusis]);
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
        $jawabandiskusis=JawabanDiskusi::where('id_diskusi',$id)->get();
        $jumlah = JawabanDiskusi::where('id_diskusi',$id)->count('id_diskusi');
        $diskusi=Diskusi::findOrFail($id);
        return view('pages.admin.user.materi.diskusi',['diskusi' => $diskusi,'id'=>$id,'jumlah'=>$jumlah,'jawabandiskusis'=>$jawabandiskusis]);

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
