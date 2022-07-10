<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\KelasDataTable;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(KelasDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.kelas.index');
    }
    public function create()
    {
        return view('pages.admin.master.kelas.add-edit');
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
            Kelas::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.kelas.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Kelas::findOrFail($id);
        return view('pages.admin.master.kelas.add-edit', ['data' => $data]);
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
            $data = Kelas::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.kelas.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Kelas::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
