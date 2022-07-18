@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Jawaban Quiz')

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
        <h2 class="text-center">Judul </h2>
        <h2 class="text-center">{{ $data->judul }}</h2>
        {{-- <h2 class="text-center"> Mata Kuliah {{ $data->mapel->nama }}</h2> --}}
        <div class="box-body table-responsive">
            <div class="text-center">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Soal</th>
                            <th>Jawaban</th>
                            <th>Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($soal as $i)
                        <tr>
                            <td> {{ $i->ujian_soal->soal }}</td>
                            <td > {{ $i->ujian_soal_jawaban->jawaban }}</td>
                            <td > {{ $i->benar }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Jumlah yang sudah mengumpulkan</th>
                            <td> 4 </td>
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


