<?php

namespace App\Http\Controllers\user\siswa;

// use App\Datatables\Admin\Master\KelasDataTable;
use Illuminate\Http\Request;
use App\Models\JawabanDiskusi;
use App\Http\Controllers\Controller;
use App\DataTables\User\siswa\JawabanDiskusiDataTable;

class JawabanDiskusiController extends Controller
{
    public function index(JawabanDiskusiDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.user.materi.index');
    }
    public function create()
    {
        return view('pages.admin.user.materi.jawabandiskusi');
    }
    public function store(Request $request)
    {
        dd($request->all());
        try {
            $request->validate([
                'nama' => 'required'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            JawabanDiskusi::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }
        return redirect(route('pages.admin.user.materi.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = JawabanDiskusi::findOrFail($id);
        return view('pages.admin.user.materi.index', ['data' => $data]);
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
            $data = JawabanDiskusi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('pages.admin.user.materi.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            JawabanDiskusi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
