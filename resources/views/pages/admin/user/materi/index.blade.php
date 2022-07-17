 @extends('layouts.user')

@section('content')

@php
    use App\Models\SiswaUjian;
    use App\Models\JawabanTugas;
@endphp
<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<!-- end datatables -->


<div class=" text-center" style="background: #7db2db">
    <br>
    <h1> <font color="white"> Mata Kuliah {{ $mapel->nama }}</font></h1>
    <br>
    <h5> <font color="white"> {{ $mapel->Guru->nama }}</font></h5>
    <h5> <font color="white"> Jurusan {{ $mapel->Jurusan->nama }}</font></h5>
    <br>
</div>
<br>
<!-- judul -->
<div class="container">
    <div class="row justify-content-center">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                    <span class="d-sm-none">Tab 1</span>
                    <span class="d-sm-block d-none">Materi</span>

                </a>
            </li>
            <li class="nav-item">
                <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Tab 2</span>
                    <span class="d-sm-block d-none">Diskusi</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#default-tab-3" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Tab 3</span>
                    <span class="d-sm-block d-none">Tugas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#default-tab-4" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Tab 4</span>
                    <span class="d-sm-block d-none">Quiz</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#default-tab-5" data-toggle="tab" class="nav-link">
                    <span class="d-sm-none">Tab 5</span>
                    <span class="d-sm-block d-none">Presensi</span>
                </a>
            </li>

        </ul>

    </div>
</div>
<!-- end judul -->

<!-- begin tab-content -->
<div class="tab-content p-15 rounded bg-white mb-4">

 <!-- begin materi-->
 <div class="tab-pane fade active show" id="default-tab-1">
    <h3 class="m-t-10">Materi</h3>
    <p>
                <div class="card">
                            <div class="">
                                <table class="table">
                                    <thead>
                                        <tr> <td width="50" class="text-right"><b> Nama Mata Kuliah </b></td> <td width="10"> : </td> <td width="300"> {{ $mapel->nama }} </td> </tr>
                                        <tr> <td class="text-right"><b> Jumlah SKS </b></td> <td> : </td> <td> {{ $mapel->sks }} </td> </tr>
                                        <tr> <td class="text-right"><b> Semester </b></td> <td> : </td>  <td>{{ $mapel->semester }} </td> </tr>
                                    </thead>

                                </table>

                            </div>
                </div>

    <style type="text/css">

        .modal-dialog  {width:92%;}

        .docs {
            position: relative;
            padding-bottom: 40%;
            height: 0;
            overflow: hidden;
        }
        .docs iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .modal {
            z-index: 9000;
        }
        .overlay {
            z-index: 8000;
        }
        .header {
            z-index: 7000;
        }

    </style>
    <div class="panel panel-border panel-default">
        @foreach ($materis as $materi )
            <a data-toggle="collapse" href="#collapseThreePlain" class="" aria-expanded="true">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-book"></i> {{ $materi->nama }}
                        <i class="ti-angle-down"></i>
                    </h4>
                </div>
            </a>
            <div id="collapseThreePlain" class="panel-collapse collapse in" aria-expanded="true">
                <div class="panel-body">
                    {{$materi->isi}}
                </div>
                <div class="content table-responsive">
                    <h3><a href="/downloadMateri/{{ $materi->nama_file }}">{{ $materi->nama_file }}</a></h3>
                        @isset($materi->video)
                        <video width="10%" max-width="50" height="auto" controls>
                            <source src="{{ asset('/video/'.$materi->video) }}">
                        </video>
                        @endisset
                </div>
            </div>
        @endforeach
    </div>
    </p>
</div>
<!-- end materi -->

                <!-- begin diskusi -->
                <div class="tab-pane fade" id="default-tab-2">
                    <h3 class="m-t-10"> Diskusi</h3>
                    @foreach ($diskusis as $diskusi)
                    <ul class="result-list">
                        <li>
                            <div class="note-icon f-s-30">
                                <i class="fab fa-discourse fa-2x" style="color:#7db2db"></i>

                            </div>
                            <div class="result-info">
                                <h5 class="" ><a href=" {{ route('user.diskusi.show',$diskusi->id) }}" style="color: grey">{{ $diskusi->judul }}</a></h5>
                                <p class="{{ $diskusi->created_at }}">
                                </p>
                            </div>
                        </li>
                    </ul>
                    {{-- <div class="row center">
                            <a href="{{ route('user.diskusi.show',$diskusi->id) }}">
                            <div class="card-body">

                                <h5 class="nav-item "> {{ $diskusi->judul }}</h5>
                            </div>
                            </a>
                    </div> --}}
                    @endforeach
            </div>
                <!-- end diskusi-->

                <!-- begin tugas -->
                <div class="tab-pane fade" id="default-tab-3">
                    <h3 class="m-t-10"> Tugas</h3>
                    <p>

                    @foreach ($tugass as $tugas)
                    <div class="panel-body"  style="margin-top:20px">
                        <div class="note note-blue m-b-15">
                            <div class="note-icon f-s-20">
                                <i class="fa fa-lightbulb fa-2x"></i>
                            </div>
                            <div class="note-content">
                                <h4 class="m-t-5 m-b-5 p-b-2">{{ $tugas->judul }}</h4>
                                <div class="form-group">
                                    <input type="hidden" name="id_tugas" value="{{$tugas->id}}">
                                </div>
                                <ul class="m-b-5 p-l-25">
                                    <li>{{ $tugas->isi }}</li>
                                    <li><a href="/downloadMateri/{{ $tugas->nama_file }}">{{ $tugas->nama_file }}</a></li>
                                </ul>

                            </div>
                        </div>


                        @php
                        $nilai = 'Belum upload tugas';
                        $tugasSiswaExists = JawabanTugas::where([
                            'user_id' => auth()->id(),
                            'id_tugas' => $tugas->id])->count();

                                if($tugasSiswaExists){
                            $userTugasnBenar = JawabanTugas::where([
                                'user_id' => auth()->id(),
                                'id_tugas' => $tugas->id]);
                                // 'benar' => '1'])->count();

                            // $jumlah_soal = count($ujian->soal);

                            // $nilai = 'Nilai: '.($userUjianBenar/$jumlah_soal)*100;
                            $nilai = 'Nilai: Sudah Upload ';

                        }
                            @endphp


                        <p> Jawaban Anda : </p>

                            <form action="{{ route('user.jawabantugas.jawabanTugas', $tugas->id) }}" style="margin-top:10px" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row fileupload-buttonbar">
                                    <div class="form-group">
                                        <input type="hidden" name="id_tugas" value="{{$tugas->id}}">
                                    </div>
                                    <div class="col-xl-12">
                                            <input type="file" id="jawaban" name="jawaban" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jawaban ?? old('jawaban') }}}">
                                        </span>
                                        <button type="submit" class="btn btn-primary start m-r-3" style="margin-top:10px">
                                            <i class="fa fa-fw fa-upload"></i>
                                            <span>Start upload</span>
                                        </button>
                                        <button type="reset" class="btn btn-default cancel m-r-3"  style="margin-top:10px">
                                            <i class="fa fa-fw fa-ban"></i>
                                            <span>Cancel upload</span>
                                        </button>
                                        {{-- <button type="button" class="btn btn-default delete m-r-3">
                                            <i class="fa fa-fw fa-trash"></i>
                                            <span>Delete</span>
                                        </button> --}}
                                        <!-- The global file processing state -->
                                        <span class="fileupload-process"></span>
                                    </div>
                                    <!-- The global progress state -->
                                    <div class="col-xl-5 fileupload-progress fade d-none d-xl-block">
                                        <!-- The global progress bar -->
                                        <div class="progress progress-striped active m-b-0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                        </div>
                                        <!-- The extended global progress state -->
                                        <div class="progress-extended">&nbsp;</div>
                                    </div>
                                </div>
                            </form>
                            <span class="ml-auto">
                                {{ $nilai }}
                            </span>
                    </div>
                    @endforeach
                    </p>

                </div>
                <!-- end tugas-->

                <!-- begin ujian -->
                        <div class="tab-pane fade" id="default-tab-4">
                            <h3 class="m-t-10"><i></i> Quiz</h3>
                            <div class="list-group mt-3">
                                @php
                                    $userUjian = [];
                                @endphp
                                @foreach ($ujians as $ujian)
                                <a href="{{ route('user.mapel2.ujian',$ujian->id) }}" class="list-group-item d-flex align-items-center list-group-item-action">
                                  <div class="">
                                    {{ $ujian->judul }}
                                    @php
                                        $nilai = 'Belum mengikuti ujian';
                                        $ujianSiswaExists = SiswaUjian::where([
                                            'user_id' => auth()->id(),
                                            'ujian_id' => $ujian->id])->count();

                                                if($ujianSiswaExists){
                                            $userUjianBenar = SiswaUjian::where([
                                                'user_id' => auth()->id(),
                                                'ujian_id' => $ujian->id,
                                                'benar' => '1'])->count();

                                            $jumlah_soal = count($ujian->soal);

                                            $nilai = 'Nilai: '.($userUjianBenar/$jumlah_soal)*100;

                                        }
                                            @endphp
                                  </div>

                                    <span class="ml-auto">
                                        {{ $nilai }}
                                    </span>
                                </a>
                                @endforeach
                            </div>

                        </div>
                <!-- end ujian -->

                <!-- begin presensi -->
                            <div class="tab-pane fade" id="default-tab-5">
                                <h3 class="m-t-10"><i class="fa fa-cog"></i> Presensi</h3>

                                <div class="row">
                                    @foreach ($presensis as $presensi)
                                    {{-- <h3 class="nav-item nav-link"> {{ $presensi->hari }}</h3>
                                    <h5 class="nav-item" > {{ $presensi->tanggal }}</h5> --}}

                                        <div class="col-md-6">
                                            <div class="panel panel-default" style="background:
                                                #F8BBD0">
                                                <div class="panel-body">
                                                        <small></small>
                                                        <p> {{ $presensi }}</p>
                                                        {{-- <small>{{ $presensi->jam_mulai }} - {{ $presensi->jam_akhir }}</small> --}}
                                                        <p style="font-size: 20px; font-weight: 700"></p>
                                                        <p></p>
                                                        <p>Kehadiran Anda: </p>
                                                        <a class="btn btn-default" href="">Presensi Disini</a>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
            <!-- end presensi -->

</div>
<!-- end tab-content -->

</div>
@endsection


@section('footer')
    <script>
        $(document).ready(function(){
            $('#btn-jawaban-utama').click(function(){
            alert(0);
            });
        });
    </script>
@endsection
