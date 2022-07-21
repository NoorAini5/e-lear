@extends('layouts.user')
@section('content')

<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                {{-- <h6 class="section-title bg-white text-center text-primary px-3">Mapels</h6> --}}
                {{-- <h1 class="mb-5">{{ $diskusi->judul}}</h1>
                <h5 class="nav-item" > {{ $diskusi->isi }}</h5> --}}
            </div>
            <div class="row g-4 justify-content-center">
                <div class="input">
                    <form action="{{ route('user.jawabantugas.jawabanTugas', $tugas->id) }}" style="margin-top:10px" enctype="multipart/form-data" method="POST">
                @csrf
                        <div class="form-group">
                            <input type="hidden" name="id_tugas" value="{{$id}}">
                        </div>
                        <div class="form-group">
                            {{-- <label>Jawaban Anda</label> --}}
                            <input type="file" id="jawaban" name="jawaban" class="form-control rounded-corner" placeholder="Tulis komentar anda . . ." autofocus data-parsley-required="true" value="{{{ $data->jawaban ?? old('jawaban') }}}">
                            <br>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="javascript:history.back(-1);" class="btn btn-success">
                                <i class="fa fa-arrow-circle-left"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>



            </div>
        </div>
    </div>
</body>
