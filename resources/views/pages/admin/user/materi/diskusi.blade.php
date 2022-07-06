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
            <div class="card-body">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-body">
                                    <div class="timeline-header">
                                        {{-- <span class="userimage"><img src="/assets/img/user/user-1.jpg" alt=""></span> --}}
                                        <span class="username">{{ $diskusi->judul }}<small></small></span>
                                    </div>
                                    <div class="timeline-content">
                                        <p>{{$diskusi->isi}}
                                        </p>
                                    </div>
                                    <div class="timeline-likes">
                                    </div>
                                    <span class="stats-text">21 Comments</span>
                                    <div class="timeline-comment-box ">
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
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    @foreach ($jawabandiskusis as $i)
                                    <div class="card">
                                        {{-- <h1 class="mb-5">{{ $i->jawaban}}</h1> --}}
                                        <p>{{$i->id_diskusi}}</p>
                                        <p>{{$i->jawaban}}</p>
                                    </div>
                                    @endforeach





                                </div>
                                <!-- end timeline-body -->
                            </li>

                        </ul>







            </div>
            </div>
        </div>
    </div>
</body>
