@extends('layouts.user')

@section('content')
<div class="container">
    <div row>
        <div class="row justify-content-center">
            <div class="col-md-12">
                    @foreach ($mapel2 as $mapel)
                        {{-- {{ $mapel->nama }}
                        {{ $mapel->deskripsi }} --}}
                            <div class="widget widget-stats bg-info">
                                <div class="stats-icon"><i class="fa fa-link"></i></div>
                                <div class="stats-info">
                                    <p>{{ $mapel->nama }}</p>
                                    <h6> {{ $mapel->deskripsi }}</h6>
                                </div>
                                <div class="stats-link">
                                    <a href=" {{ route('user.mapel2.show', $mapel->id) }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>


                    @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
 b
