 @extends('layouts.user')

@section('content')


<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<!-- end datatables -->

            <div class=" text-center bg-white">
                <h1 class="display-4" data-step="1" data-intro="Hello world! I'm Intro.js" data-hint="Hello world! I'm Intro.js" data-hintposition="top-middle" data-position="bottom-right-aligned">Mata Kuliah {{ $mapel->nama }}</h1>
                <br><br><br>
                <p class="lead mb-4" data-step="1" data-hintposition="top-middle" data-position="bottom-right-aligned">{{ $mapel->Guru->nama }}</p>
                <p class="lead mb-4" data-step="2" data-hintposition="top-middle" data-position="bottom-right-aligned">{{ $mapel->Jurusan->nama }}</p>
                {{-- <div class="mb-3">
                    <a class="btn btn-lg btn-primary pl-5 pr-5" href="javascript:void(0);" onclick="javascript:introJs().start();">Demo</a>
                </div> --}}
                {{-- <a href="http://introjs.com/" target="_blank" class="text-gray" data-step="5" data-intro="Intro.js is free and open-source. View it." data-hint="Intro.js is free and open-source. View it." data-hintposition="top-middle" data-position="bottom-right-aligned">View Official Website</a> --}}
            </div>




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
                    <span class="d-sm-block d-none">Ujian</span>
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
<!-- begin tab-content -->
<div class="tab-content p-15 rounded bg-white mb-4">


                <!-- begin materi-->
                <div class="tab-pane fade active show" id="default-tab-1">
                    <h3 class="m-t-10">Materi</h3>
                    <p>
                                <div class="card">
                                            <div class="content table-responsive table-full-width">
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
                    <h3 class="m-t-10"><i class="fa fa-cog"></i> Diskusi</h3>
                    @foreach ($diskusis as $diskusi)

                    <div class="card">
                        <a href="{{ route('user.diskusi.show',$diskusi->id) }}">
                        <div class="card-body">
                            <h3 class="nav-item "> {{ $diskusi->judul }}</h3>
                            {{-- <h5 class="nav-item" > {{ $diskusi->isi }}</h5> --}}
                        </div>
                        </a>
                    </div>
                        @endforeach

                </div>
                <!-- end diskusi-->

                <!-- begin tugas -->
                <div class="tab-pane fade" id="default-tab-3">
                    <h3 class="m-t-10"><i class="fa fa-cog"></i> Tugas</h3>
                    <p>
                        {{-- @foreach ($tugass as $tugas)
                        <h3 class="nav-item "> {{ $tugas->judul }}</h3>
                        <h3 class="nav-item "> {{ $tugas->isi }}</h3>
                        <h3><a href="/downloadMateri/{{ $tugas->nama_file }}">{{ $tugas->nama_file }}</a></h3>
                        @endforeach --}}

                        {{-- <form action="{{ route('user.jawabantugas.jawabanTugas') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id_tugas" value="{{$tugas->id}}">
                            </div>
                            <div class="form-group">
                                <label>Jawaban Anda</label>
                                <input type="file" id="jawaban" name="jawaban" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jawaban ?? old('jawaban') }}}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form> --}}

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

                            <form action="{{ route('user.jawabantugas.jawabanTugas') }}" style="margin-top:10px" method="POST">
                                <div class="row fileupload-buttonbar">
                                    <div class="col-xl-7">
                                            <input type="file" id="jawaban" name="jawaban" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jawaban ?? old('jawaban') }}}">
                                        </span>
                                        <button type="submit" class="btn btn-primary start m-r-3" style="margin-top:10px">
                                            <i class="fa fa-fw fa-upload"></i>
                                            <span>Start upload</span>
                                        </button>
                                        {{-- <button type="reset" class="btn btn-default cancel m-r-3">
                                            <i class="fa fa-fw fa-ban"></i>
                                            <span>Cancel upload</span>
                                        </button>
                                        <button type="button" class="btn btn-default delete m-r-3">
                                            <i class="fa fa-fw fa-trash"></i>
                                            <span>Delete</span> --}}
                                        </button>
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
                            {{-- <div class="table-responsive">
                                <table class="table table-striped table-condensed text-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th width="10%">PREVIEW</th>
                                            <th>FILE INFO</th>
                                            <th>UPLOAD PROGRESS</th>
                                            <th width="1%"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="files">
                                        <tr data-id="empty">
                                            <td colspan="4" class="text-center text-muted p-t-30 p-b-30">
                                                <div class="m-b-10"><i class="fa fa-file fa-3x"></i></div>
                                                <div>No file selected</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> --}}

                    </div>
                    @endforeach






                    </p>

                </div>
                <!-- end tugas-->

                <!-- begin ujian -->
                        <div class="tab-pane fade" id="default-tab-4">
                            <h3 class="m-t-10"><i class="fa fa-cog"></i> Ujian</h3>
                            @foreach ($ujians as $ujian)
                            <h3 class="nav-item nav-link"> {{ $ujian->judul }}</h3>
                            <h5 class="nav-item" > {{ $ujian->soal }}</h5>
                                @endforeach

                        </div>
                <!-- end ujian -->

                <!-- begin presensi -->
                            <div class="tab-pane fade" id="default-tab-5">
                                <h3 class="m-t-10"><i class="fa fa-cog"></i> Presensi</h3>
                                @foreach ($presensis as $presensi)
                                <h3 class="nav-item nav-link"> {{ $presensi->hari }}</h3>
                                <h5 class="nav-item" > {{ $presensi->tanggal }}</h5>
                                    @endforeach

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
