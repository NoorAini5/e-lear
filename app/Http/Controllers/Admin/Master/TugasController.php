<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Mapel;
use App\Models\Tugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Datatables\Admin\Master\TugasDataTable;

class TugasController extends Controller
{
    public function index(TugasDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.tugas.index');
    }

    public function create()
    {
        $jenis_mapel = Mapel::pluck('nama', 'id');
        return view('pages.admin.master.tugas.add-edit',['jenis_mapel'=>$jenis_mapel]);
    }

    public function store(Request $request)

    {
        // dd($request->all());

        $file = $request->file('nama_file');
            $nama_file = $file->getClientOriginalName();
            $file->move('materi', $nama_file);
            $validatedData['nama_file'] = $nama_file;
            $validatedData['isi'] = $request->isi;
            $validatedData['mapel'] = $request->mapel;
            $validatedData['judul'] = $request->judul;

            Tugas::create($validatedData);

        return redirect(route('admin.master-data.tugas.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Tugas::findOrFail($id);
        $jenis_mapel= Mapel::pluck('nama','id');
        return view('pages.admin.master.tugas.add-edit', ['data' => $data, 'jenis_mapel'=>$jenis_mapel]);


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
            $data = Tugas::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.tugas.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Tugas::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }

    public function upload(){
		{
            return view('upload');
        }
	}


    public function proses_upload(Request $request)
    {
        // $request->validate([
        //     'filename' => 'required',
        //     'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        // ]);
        // if ($request->hasfile('filename')) {
        //     $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
        //     $request->file('filename')->move(public_path('file'), $filename);
        //      Tugas::create(
        //             [
        //                 'file' =>$filename
        //             ]
        //         );
        //     echo'Success';
        // }else{
        //     echo'Gagal';
        // }

    }
}
