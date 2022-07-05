@extends('layouts.user')

@section('content')

<body>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                {{-- <h6 class="section-title bg-white text-center text-primary px-3">Mapels</h6> --}}
                <h1 class="mb-5">{{ $diskusi->judul}}</h1>
                <h5 class="nav-item" > {{ $diskusi->isi }}</h5>
            </div>
            <div class="row g-4 justify-content-center">
            <div class="card-body">
                    {{-- <form action="{{ isset($data) ? route('user.jawabandiskusi.update', $data->id) : route('user.jawabandiskusi.store') }}" id="form" name="form" method="POST" enctype="multipart/form-data" data-parsley-validate="true"> --}}

                        {{-- <form action="{{ route('user.jawabandiskusi.jawabanDiskusi') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id_diskusi" value="{{$id}}">
                            </div>
                            <div class="form-group">
                                <label>Jawaban Anda</label>
                                <input type="text" id="jawaban" name="jawaban" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jawaban ?? old('jawaban') }}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>

                        </form> --}}
                        <ul class="timeline">
                            <li>

                                <!-- begin timeline-icon -->
                                {{-- <div class="timeline-icon">
                                    <a href="javascript:;">&nbsp;</a>
                                </div> --}}
                                <!-- end timeline-icon -->
                                <!-- begin timeline-body -->
                                <div class="timeline-body">
                                    <div class="timeline-header">
                                        {{-- <span class="userimage"><img src="/assets/img/user/user-1.jpg" alt=""></span> --}}
                                        <span class="username"><a href="javascript:;">{{ $diskusi->judul }}</a> <small></small></span>
                                    </div>
                                    <div class="timeline-content">
                                        <p>{{$diskusi->isi}}
                                        </p>
                                    </div>
                                    <div class="timeline-likes">
                                    </div>
                                    <span class="stats-text">21 Comments</span>
                                    <div class="timeline-comment-box">
                                        {{-- <div class="user"><img src="/assets/img/user/user-13.jpg"></div> --}}
                                        <div class="input">
                                            <form action="{{ route('user.jawabandiskusi.jawabanDiskusi', $diskusi->id) }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="hidden" name="id_diskusi" value="{{$id}}">
                                                </div>
                                                <div class="form-group">
                                                    {{-- <label>Jawaban Anda</label> --}}
                                                    <input type="text" id="jawaban" name="jawaban" class="form-control rounded-corner" placeholder="Write a comment..." autofocus data-parsley-required="true" value="{{{ $data->jawaban ?? old('jawaban') }}}">
                                                </div>

                                                <div class="form-group">
                                                    <span class="input-group-btn p-l-10">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    sfdf
                                    {{-- @foreach ($jawabandiskusis as $jawabandiskusi)
                                        <h1 class="mb-5">Jawaban Diskusi</h1>
                                        <h1 class="mb-5">{{ $jawabandiskusi->judul}}</h1>
                                    @endforeach --}}
                                </div>
                                <!-- end timeline-body -->
                            </li>

                        </ul>







            </div>
            </div>
        </div>
    </div>
</body>
