<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Mapel;
use App\Models\Diskusi;
use Illuminate\Http\Request;
use App\Models\JawabanDiskusi;
use Maatwebsite\Excel\Files\Disk;
use App\Http\Controllers\Controller;
use App\Datatables\Admin\Master\DiskusiDataTable;

class DiskusiController extends Controller
{
    public function index(DiskusiDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.diskusi.index');
    }

    public function create()
    {
        $jenis_mapel = Mapel::pluck('nama', 'id');
        return view('pages.admin.master.diskusi.add-edit', ['jenis_mapel'=> $jenis_mapel]);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|min:2'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Diskusi::create($request->all());
        } catch (\Throwable $th) {
            // dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.diskusi.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Diskusi::findOrFail($id);
        $jenis_mapel= Mapel::pluck('nama','id');
        return view('pages.admin.master.diskusi.add-edit', ['data' => $data,  'jenis_mapel'=> $jenis_mapel]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'judul' => 'required|min:2'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Diskusi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.diskusi.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Diskusi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
    public function show($id)
    {
        $jawabandiskusis=JawabanDiskusi::orderBy('created_at','desc')->where('id_diskusi',$id)->get();
        $data = Diskusi::findOrFail($id);
        $jumlah = JawabanDiskusi::where('id_diskusi',$id)->count('id_diskusi');
        return view('pages.admin.master.diskusi.show', ['data' => $data,'jumlah'=>$jumlah,'jawabandiskusis'=>$jawabandiskusis]);
    }
}
