@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="row">
                    @foreach ($fakultas as $fkl)
                        <br>
                        <div class="col-xl-3 col-md-6">
                            <div class="widget widget-stats bg-info">
                                <div class="stats-icon"><i class="fa fa-link"></i></div>
                                <div class="stats-info">
                                    <h5>Fakultas</h5>
                                    <h6>{{ $fkl->nama }}</h6>
                                </div>
                                <div class="stats-link">
                                    <a href=" {{ route('user.fakultas.show',$fkl->id) }}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
