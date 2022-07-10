<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\MateriDataTable;
use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(MateriDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.materi.index');
    }
    public function create()
    {
        $jenis_mapel = Mapel::pluck('nama', 'id');
        return view('pages.admin.master.materi.add-edit', ['jenis_mapel'=> $jenis_mapel]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
// upload file
            $file = $request->file('nama_file');
            $nama_file = $file->getClientOriginalName();
            $file->move('materi', $nama_file);
            $validatedData['nama_file'] = $nama_file;
            $validatedData['isi'] = $request->isi;
            $validatedData['matkul'] = $request->matkul;
            $validatedData['nama'] = $request->nama;


            //upload video

            if ($request->file('video')){
                $file = $request->file('video');
                $video = $file->getClientOriginalName();
                $file->move('video', $video);
                $validatedData['video'] = $video;
            }

            // $file = $request->file('video');
            // $video = $file->getClientOriginalName();
            // $file->move('video', $video);
            // $validatedData['video'] = $video;
            // $validatedData['isi'] = $request->isi;
            // $validatedData['matkul'] = $request->matkul;
            // $validatedData['nama'] = $request->nama;


            Materi::create($validatedData);

        return redirect(route('admin.master-data.materi.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Materi::findOrFail($id);
        $jenis_mapel= Mapel::pluck('nama','id');
        return view('pages.admin.master.materi.add-edit', ['data' => $data, 'jenis_mapel'=> $jenis_mapel]);
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
            $data = Materi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.materi.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Materi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
