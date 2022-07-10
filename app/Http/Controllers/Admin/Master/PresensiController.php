<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\User;
use App\Models\Mapel;
use App\Models\Presensi;
use App\Models\tm_presensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\Master\PresensiDataTable;
use App\Models\Siswa;

class PresensiController extends Controller
{
    public function index(PresensiDataTable $dataTable)
    {
        // return $dataTable->render('pages.admin.master.presensi.index');

            $user = User::where('id');
            return view('absensi.data-absensi', [
                'absensi' => tm_presensi::all(),
                'Siswa' => Siswa::pluck('id'),
                'user' => $user
            ]);


    }
    public function create()
    {
        $jenis_mapel = Mapel::pluck('nama', 'id');
        return view('pages.admin.master.presensi.add-edit',['jenis_mapel'=>$jenis_mapel]);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                // 'nama' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            tm_presensi::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.tmpresensi.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = tm_presensi::findOrFail($id);
        $jenis_mapel= Mapel::pluck('nama','id');
        return view('pages.admin.master.presensi.add-edit', ['data' => $data,'jenis_mapel'=> $jenis_mapel]);
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = tm_presensi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.tmpresensi.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            tm_presensi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
