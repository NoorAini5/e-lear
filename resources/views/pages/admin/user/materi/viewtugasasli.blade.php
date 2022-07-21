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


     <p> Jawaban Anda : </p>

        @if($tugas->jawaban == null)
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
                        <!-- The global file processing state -->
                        <span class="fileupload-process"></span>
                    </div>
                    @else
                    <div class=" ">
                        <div class=" ">
                            <h4 class="card-title text-center"> Anda Sudah mengumpulkan </h4>
                            <div class="d-grid">
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                     @endif
                </div>
            </form>
            <span class="ml-auto">
            </span>
    </div>
    @endforeach
    </p>
</div>











<div class="tab-pane fade" id="default-tab-3">
    <h3 class="m-t-10"> Tugas</h3>

    <div class="row">
        @foreach ($jawabantugass as $tugas)
        {{-- <h3 class="nav-item nav-link"> {{ $presensi->hari }}</h3>
        <h5 class="nav-item" > {{ $presensi->tanggal }}</h5> --}}

            <div class="col-md-6">
                <div class="panel panel-default" style="background:
                    #7db2db">
                    <div class="panel-body">
                            {{-- {{-- <p> {{ $presensi->tmpresensi->hari }}, {{ $presensi->tmpresensi->tanggal }} </P> --}}
                            <p> {{ $tugas }}</p>
                            {{-- <small>{{ $presensi->jam_mulai }} - {{ $presensi->jam_akhir }}</small> --}}
                            <p style="font-size: 20px; font-weight: 700"></p>
                            <p></p>
                            <p>Kehadiran : {{ $tugas->keterangan }} </p>
                            <a class="btn btn-default" href="/detailPresensi/{{ $presensi->id }}">Presensi Disini</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>
