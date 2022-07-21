@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Presensi')

@push('css')
<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<!-- end datatables -->
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  {{-- <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
  <li class="breadcrumb-item active">@yield('title')</li> --}}
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Detail <small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<div class="panel panel-inverse">
  <!-- begin panel-heading -->
  <div class="panel-heading">
    <h4 class="panel-title">Data - @yield('title')</h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
    </div>
  </div>
  <!-- end panel-heading -->
  <!-- begin panel-body -->
  <div class="panel-body">
    <div class="container">
        <h2 class="text-center">Mata Kuliah {{ $data->Mapel->nama }}</h2>
        <h5 class="text-center"> {{ $data->tmpresensi->tanggal }}</h5>
        <p class="text">Hadir : {{ $totalhadir }} Belum presensi : {{ $totalalpha }} Izin :{{ $totalizin }}   Sakit: {{ $totalsakit }} </p>
        {{-- <h2 class="text-center">{{ $data->user_id }}</h2> --}}
        {{-- <h2 class="text-center"> Mata Kuliah {{ $data->mapel->nama }}</h2> --}}
        <div class="box-body table-responsive">
            <div class="text-center">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($presensi as $data)
                        <tr>
                            <td> {{ $data->user->name}}</td>
                            <td > {{ $data->keterangan }}</a> </td>
                            {{-- <td><a href="downloadTugas/{{ $tugas->jawaban }}">{{ $tugas->jawaban }}</a></td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total Siswa</th>
                            <th> {{ $totalsiswa }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div><!-- /.box-body -->
    </div>
  </div>
  <!-- end panel-body -->
</div>
<!-- end panel -->
@endsection


