
 @extends('layouts.user')

 @section('content')

<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
            <div class="card-body">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-body">
                                    <div class="timeline-comment-box ">
                                        <div class="">
                                            <div class="col-md-12">
                                                @if($presensi->jam_absen == null)
                                                <div class="card border-success border">
                                                    <div class="card-body">
                                                        <form action="/simpanPresensi/{{ $presensi->id}}" method="post">
                                                            @csrf
                                                            @method('put')
                                                            <input type="hidden" name="jam_absen" value="{{ $localtime }}">
                                                            {{-- <input type="hidden" name="keterangan" value="Hadir"> --}}
                                                            <p> Keterangan Anda : </p>
                                                            <select name='keterangan'>
                                                                <option value='hadir'>Hadir</option>
                                                                <option value='izin'>Izin</option>
                                                                <option value='sakit'>Sakit</option>
                                                              </select>
                                                            <button class="btn btn-primary">  Simpan </button>
                                                        </form>
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                                @else
                                                <div class=" ">
                                                    <div class=" ">
                                                        <h4 class="card-title text-center"> Anda Sudah Presensi </h4>
                                                        <h4 class="card-title text-center"> Mata Kuliah {{ $presensi->Mapel->nama }}</h4>
                                                        <p class="text-center">Tanggal : {{ $presensi->tmpresensi->hari }},  {{ $presensi->tmpresensi->tanggal }}</p>
                                                        <p class="text-center"> Jam :{{ $presensi->tmpresensi->jam_mulai }} - {{ $presensi->tmpresensi->jam_akhir }}</p>
                                                        <p class="text-center">Keterangan : {{ $presensi->keterangan }}</p>
                                                        <a href="javascript:history.back(-2);" class="btn btn-success">
                                                            <i class="fa fa-arrow-circle-left"></i> Kembali
                                                        </a>
                                                        <div class="d-grid">
                                                        </div>
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                                 @endif
                                            </div> <!-- end col-->

                                        </div> <!-- end row-->
                                    </div>
                                </div>
                                <!-- end timeline-body -->
                            </li>
                        </ul>
            </div>
            </div>
        </div>
    </div>
</body>




