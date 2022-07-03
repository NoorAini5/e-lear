<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\FakultasDataTable;
use App\Http\Controllers\Controller;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index(FakultasDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.fakultas.index');
    }
    public function create()
    {
        return view('pages.admin.master.fakultas.add-edit');
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
            Fakultas::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.fakultas.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Fakultas::findOrFail($id);
        return view('pages.admin.master.fakultas.add-edit', ['data' => $data]);
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
            $data = Fakultas::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.fakultas.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Fakultas::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
