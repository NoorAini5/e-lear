<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\SiswaDataTable;
use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Agama;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index(SiswaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.siswa.index');
    }
    public function create()
    {
        $jenis_agama = Agama::pluck('nama', 'id');
        return view('pages.admin.master.siswa.add-edit', ['jenis_agama'=> $jenis_agama]);
    }
    public function store(Request $request)
    // {
    //     try {
    //         $request->validate([
    //             'nama' => 'required|min:3'
    //         ]);
    //     } catch (\Throwable $th) {
    //         return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
    //     }

    //     try {
    //         Siswa::create($request->all());
    //     } catch (\Throwable $th) {
    //         return back()->withInput()->withToastError('Something went wrong');
    //     }

    //     return redirect(route('admin.master-data.siswa.index'))->withToastSuccess('Data tersimpan');
    // }
    {
        // dd($request->all());

        $file = $request->file('foto');
            $foto = $file->getClientOriginalName();
            $file->move('materi', $foto);
            $validatedData['foto'] = $foto;
            $validatedData['isi'] = $request->isi;
            $validatedData['matkul'] = $request->matkul;
            $validatedData['nama'] = $request->nama;

            Siswa::create($validatedData);

        return redirect(route('admin.master-data.siswa.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Siswa::findOrFail($id);
        $jenis_agama= Siswa::pluck('nama','id');
        return view('pages.admin.master.siswa.add-edit', ['data' => $data, 'jenis_agama'=> $jenis_agama]);
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
            $data = Siswa::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.siswa.index'))->withToastSuccess('Data tersimpan');
    }

    public function show($id)
    {
        $data = Siswa:: with('Agama') -> findOrFail($id);
        $jenis_agama= Agama::pluck('nama','id');
        return view('pages.admin.master.siswa.show', ['data' => $data, 'jenis_agama'=> $jenis_agama]);
    }

    public function destroy($id)
    {
        try {
            Siswa::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
