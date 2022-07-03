<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\MapelDataTable;
use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Guru;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(MapelDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.mapel.index');
    }
    public function create()
    {

        $jenis_guru = Guru::pluck('nama', 'id');
        $jenis_jurusan = Jurusan::pluck('nama', 'id');
        return view('pages.admin.master.mapel.add-edit', ['jenis_guru'=> $jenis_guru, 'jenis_jurusan'=>$jenis_jurusan]);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Mapel::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.mapel.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Mapel::findOrFail($id);
        $jenis_jurusan = Jurusan::pluck('nama', 'id');
        $jenis_guru= Guru::pluck('nama','id');
        return view('pages.admin.master.mapel.add-edit', ['data' => $data, 'jenis_guru'=> $jenis_guru,'jenis_jurusan'=>$jenis_jurusan]);
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Mapel::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.mapel.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Mapel::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
