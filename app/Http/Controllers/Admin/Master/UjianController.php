<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Mapel;
use App\Models\Tugas;
use App\Models\Ujian;
use App\Models\UjianSoal;
use App\Models\JawabanTugas;
use Illuminate\Http\Request;
use App\Models\UjianSoalJawaban;
use App\Http\Controllers\Controller;
use App\Datatables\Admin\Master\UjianDataTable;

class UjianController extends Controller
{
    public function index(UjianDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.ujian.index');
    }
    public function create()
    {
        $jenis_mapel = Mapel::pluck('nama', 'id');
        return view('pages.admin.master.ujian.add',['jenis_mapel'=>$jenis_mapel]);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|min:3',
                'mapel' => 'required|exists:App\Models\Mapel,id',
                'soal' => 'required|array',
                'soal.*.text' => 'required|string',
                'soal.*.jawaban' => 'required|array',
                'soal.*.jawaban.*.urutan_jawaban' => 'required',
                'soal.*.jawaban.*.text' => 'required|string',
                'soal.*.jawaban.*.benar' => 'nullable',
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = [
                'judul' => $request->judul,
                'mapel_id' => $request->mapel
            ];
            $ujian_sv = Ujian::create($data);
            if($ujian_sv)
            {
                $ujian_id = $ujian_sv->id;
                $ujian_soal = [];
                foreach($request->input('soal') as $soal){
                    $ujian_soal = [
                        'ujian_id' => $ujian_id,
                        'soal' => $soal['text'],
                    ];
                    $ujian_soal_sv = UjianSoal::create($ujian_soal);
                    if($ujian_soal_sv)
                    {
                        $ujian_soal_id = $ujian_soal_sv->id;
                        $soal_jawaban = [];
                        foreach($soal['jawaban'] as $jawaban)
                        {
                            $soal_jawaban[] = [
                                'ujian_soal_id' => $ujian_soal_id,
                                'urutan' => $jawaban['urutan_jawaban'],
                                'jawaban' => $jawaban['text'],
                                'benar' => ($jawaban['benar']?? 0) == '1'? 1 : 0
                            ];
                        }
                        UjianSoalJawaban::insert($soal_jawaban);
                    }
                }

            }
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.ujian.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Ujian::findOrFail($id);
        $jenis_mapel= Mapel::pluck('nama','id');
        return view('pages.admin.master.ujian.edit', ['data' => $data, 'jenis_mapel'=>$jenis_mapel]);
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'judul' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Ujian::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.ujian.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Ujian::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
    public function show($id)
    {

        $data = Ujian::findOrFail($id);
        return view('pages.admin.master.ujian.show', ['data' => $data]);
    }
}
