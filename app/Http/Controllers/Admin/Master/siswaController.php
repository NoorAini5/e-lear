<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\SiswaDataTable;
use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Agama;
use App\Models\User;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index(SiswaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.siswa.index');
    }
    public function create()
    {
        $user_id = User::pluck('name','id');
        $jenis_agama = Agama::pluck('nama', 'id');
        return view('pages.admin.master.siswa.add-edit', ['jenis_agama'=> $jenis_agama, 'user_id'=>$user_id]);
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
            $file->move('fotosiswa', $foto);
            $validatedData['foto'] = $foto;
            $validatedData['user_id'] = $request->user_id;
            $validatedData['nis'] = $request->nis;
            $validatedData['no_induk'] = $request->no_induk;
            $validatedData['tempat_lahir'] = $request->tempat_lahir;
            $validatedData['tanggal_lahir'] = $request->tanggal_lahir;
            $validatedData['alamat'] = $request->alamat;
            $validatedData['agama'] = $request->agama;
            $validatedData['jenis_kelamin'] = $request->jenis_kelamin;
            $validatedData['telepon'] = $request->telepon;
            $validatedData['email'] = $request->email;
            $validatedData['nama'] = $request->nama;

            Siswa::create($validatedData);

        return redirect(route('admin.master-data.siswa.index'))->withToastSuccess('Data tersimpan');


    }

    public function edit($id)
    {
        $user_id = User::pluck('name','id');
        $data = Siswa::findOrFail($id);
        $jenis_agama= Siswa::pluck('nama','id');
        return view('pages.admin.master.siswa.add-edit', ['data' => $data, 'jenis_agama'=> $jenis_agama,'user_id'=>$user_id]);
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
