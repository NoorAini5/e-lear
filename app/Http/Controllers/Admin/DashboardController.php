<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Guru;
use App\Models\Fakultas;
use App\Models\JawabanDiskusi;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_fakultas=Fakultas::count();
        $jumlah_siswa=Siswa::count();
        // $jumlah_pengajar=Guru::count();
        // $jumlah_=Guru::count();
        if(auth()->user()->hasRole('admin')){

            return view('pages.admin.dashboard',[
                'jumlah_fakultas'=>$jumlah_fakultas,
                'jumlah_siswa'=>$jumlah_siswa
            ]);
        }
        elseif(auth()->user()->hasRole('manager')){
            return view('pages.admin.guru.dashboard');
        }
        else{
            return view('home');
        }
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
        $jumlah_fakultas = JawabanDiskusi::where('id_diskusi',$id)->count('id_diskusi');
        // $jumlah = Fakultas::count();
        return view('pages.admin.dashboard',['jumlah_fakultas'=>$jumlah_fakultas]);
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
