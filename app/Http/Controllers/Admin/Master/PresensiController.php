<?php

namespace App\Http\Controllers\Admin\Master;

use DateTime;
use DateTimeZone;
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
        return $dataTable->render('pages.admin.master.presensi.index');

        // $user = User::where('id');
        // return view('absensi.data-absensi', [
        //     'absensi' => tm_presensi::all(),
        //     'Siswa' => Siswa::pluck('id'),
        //     'user' => $user
        // ]);


    }
    public function create()
    {
        $jenis_mapel = Mapel::pluck('nama', 'id');
        $user = User::pluck('id');
        return view('pages.admin.master.presensi.add-edit', ['jenis_mapel' => $jenis_mapel, 'user' => $user]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $buatPresensi = $this->buatPresensi($data);

        if (count($request->user_id) >= 0) {
            foreach ($data['user_id'] as $item => $value) {
                $data2 = array(
                    'presensi_id' => $buatPresensi->id,
                    'user_id' => $data['user_id'][$item],
                    'keterangan' => "Belum Presensi"
                );
                Presensi::create($data2);
            }
        }

        return redirect(route('admin.master-data.tmpresensi.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = tm_presensi::findOrFail($id);
        $jenis_mapel = Mapel::pluck('nama', 'id');
        return view('pages.admin.master.presensi.add-edit', ['data' => $data, 'jenis_mapel' => $jenis_mapel]);
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

    public function buatPresensi(array $data)
    {
        return tm_presensi::create([
            'mapel' => $data['mapel'],
            'hari' => $data['hari'],
            'jam_mulai' => $data['jam_mulai'],
            'jam_akhir' => $data['jam_akhir'],
            'tanggal' => $data['tanggal']
        ]);
    }

    public function tampilPresensi()
    {
        $presensi = Presensi::where('user_id', auth()->user()->id)->get();
    }

    public function detailPresensi($id)
    {
        $presensi = Presensi::findOrFail($id);

        $cekPresensi = Presensi::where('presensi_id', $id)->where('user_id', auth()->user()->id)->count();
    }

    public function simpanPresensiUser($id, Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $validatedData = $request->validate([
            'keterangan' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['jam_absen'] = $localtime;

        Presensi::where('id', $id)->update($validatedData);
    }
}
