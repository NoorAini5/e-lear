<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\jurusanDataTable;
use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index(jurusanDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.jurusan.index');
    }
    public function create()
    {
        $jenis_fakultas = Fakultas::pluck('nama', 'id');
        return view('pages.admin.master.jurusan.add-edit',['jenis_fakultas'=>$jenis_fakultas]);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Jurusan::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.jurusan.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Jurusan::findOrFail($id);
        return view('pages.admin.master.jurusan.add-edit', ['data' => $data]);
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
            $data = Jurusan::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.jurusan.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Jurusan::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
