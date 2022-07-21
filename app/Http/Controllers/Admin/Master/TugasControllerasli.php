<?php

namespace App\Http\Controllers\Admin\Master;

use App\Models\Mapel;
use App\Models\Tugas;
use App\Models\JawabanTugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
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

    public function show($id)
    {
        // $jawabantugas=JawabanTugas::orderBy('created_at','desc')->where('id_diskusi',$id)->get();
        $jawabantugass=JawabanTugas::where('mapel', $id)->where('user_id',auth()->user()->id)->get();
        $jawabantugas=JawabanTugas::where('id_tugas',$id)->get();
        $jumlahtugas=JawabanTugas::where('id_tugas',$id)->count('id_tugas');
        $data = Tugas::findOrFail($id);
        // $jumlah = JawabanTugas::where('id_diskusi',$id)->count('id_diskusi');
        return view('pages.admin.master.tugas.show', ['data' => $data,'jawabantugas'=>$jawabantugas,'jumlahtugas'=>$jumlahtugas]);
    }
    public function buatTugas(array $data)
    {
        return Tugas::create([
            'judul' => $data['judul'],
            'isi' => $data['isi'],
            'nama_file' => $data['nama_file'],
            'mapel' => $data['mapel']
        ]);
    }
    public function tampilTugas()
    {

        // $time = Carbon::now();
        // dd($time);
        $presensi = JawabanTugas::where('user_id', auth()->user()->id)->get();
        // return view('pages.admin.user.materi.presensi', ['presensi' => $presensi,'time'=>$time]);
    }

    public function detailTugas($id)
    {
        // $timezone = 'Asia/Jakarta';
        // $date = new DateTime('now', new DateTimeZone($timezone));
        // $tanggal = $date->format('Y-m-d');
        // $localtime = $date->format('H:i:s');
        $jawabantugas = JawabanTugas::findOrFail($id);
        // dd($presensi);
        // dd($localtime);
        $cekTugas = JawabanTugas::where('id_tugas', $id)->where('user_id', auth()->user()->id)->count();
        return view('pages.admin.user.materi.tugas', ['jawabantugas' => $jawabantugas]);
    }
    public function simpanTugasUser($id, Request $request)
    {
        // $timezone = 'Asia/Jakarta';
        // $date = new DateTime('now', new DateTimeZone($timezone));
        // $tanggal = $date->format('Y-m-d');
        // $localtime = $date->format('H:i:s');
        $jawaban =

        $validatedData = $request->validate([
            'jawaban' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['jawaban'] = $jawaban;

        JawabanTugas::where('id', $id)->update($validatedData);

        return Redirect::back()->with('success', 'Tugas Berhasil');
    }
}




























namespace App\Http\Controllers\Admin\Master;

use DateTime;
use DateTimeZone;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\JawabanTugas;
use App\Models\Tugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\Master\TugasDataTable;
use Illuminate\Support\Facades\Redirect;

class TugasController extends Controller
{
    public function index(TugasDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.tugas.index');

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
        return view('pages.admin.master.tugas.add-edit', ['jenis_mapel' => $jenis_mapel, 'user' => $user]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $buatTugas = $this->buatTugas($data);

        if (count($request->user_id) >= 0) {
            foreach ($data['user_id'] as $item => $value) {
                $data2 = array(
                    'id_tugas' => $buatTugas->id,
                    // 'mapel' => $buatPresensi->mapel,
                    'user_id' => $data['user_id'][$item],
                    'jawaban' => "Belum Upload"
                );
                JawabanTugas::create($data2);
            }
        }

        return redirect(route('admin.master-data.tugas.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Tugas::findOrFail($id);
        $jenis_mapel = Mapel::pluck('nama', 'id');
        return view('pages.admin.master.tugas.add-edit', ['data' => $data, 'jenis_mapel' => $jenis_mapel]);
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

    public function buatTugas(array $data)
    {
        return Tugas::create([
            'judul' => $data['judul'],
            'isi' => $data['isi'],
            'nama_file' => $data['nama_file'],
            'mapel' => $data['mapel'],
            // 'tanggal' => $data['tanggal']
        ]);
    }

    public function tampilTugas()
    {

        // $time = Carbon::now();
        // dd($time);
        $presensi = JawabanTugas::where('user_id', auth()->user()->id)->get();
        // return view('pages.admin.user.materi.presensi', ['presensi' => $presensi,'time'=>$time]);
    }

    public function detailTugas($id)
    {
        // $timezone = 'Asia/Jakarta';
        // $date = new DateTime('now', new DateTimeZone($timezone));
        // $tanggal = $date->format('Y-m-d');
        // $localtime = $date->format('H:i:s');
        $jawabantugas = JawabanTugas::findOrFail($id);
        // dd($presensi);
        // dd($localtime);
        $cekPresensi = JawabanTugas::where('presensi_id', $id)->where('user_id', auth()->user()->id)->count();
        return view('pages.admin.user.materi.tugas', ['jawabantugas' => $jawabantugas]);
    }

    public function simpanTugasUser($id, Request $request)
    {
        // $timezone = 'Asia/Jakarta';
        // $date = new DateTime('now', new DateTimeZone($timezone));
        // $tanggal = $date->format('Y-m-d');
        // $localtime = $date->format('H:i:s');

        $validatedData = $request->validate([
            'jawaban' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['jam_absen'] = $localtime;

        JawabanTugas::where('id', $id)->update($validatedData);

        return Redirect::back()->with('success', 'Presensi Berhasil');
    }
    public function show($id)
    {

        $data = JawabanTugas::findOrFail($id);
        return view('pages.admin.master.tugas.show', ['data' => $data]);
    }
}
