@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Master Data</a></li>
  <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Master Data<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<form action="{{ isset($data) ? route('admin.master-data.guru.update', $data->id) : route('admin.master-data.guru.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

  <div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
      <h4 class="panel-title">Form @yield('title')</h4>
      <div class="panel-heading-btn">
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      </div>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body">
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="alamat"><strong>Nama</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['nama'] }}
                </div>
                <div class="col-md-1 my-auto">
                    <label for="nomor_rumah"><strong>NISN</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['nis']  }}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="alamat"><strong>Nomor Induk Siswa</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['no_induk'] }}

                </div>
                <div class="col-md-1 my-auto">
                    <label for="nomor_rumah"><strong>Tempat Lahir</strong></label>
                </div>
                <div class="col-md-5">
                    {{  $data['tempat_lahir'] }}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="alamat"><strong>Tanggal Lahir</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['tanggal_lahir'] }}
                </div>
                <div class="col-md-1 my-auto">
                    <label for="nomor_rumah"><strong>Alamat</strong></label>
                </div>
                <div class="col-md-5">
                  {{ $data['alamat'] }}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="alamat"><strong>Nomor Induk</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['no_induk'] }}
                </div>
                <div class="col-md-1 my-auto">
                    <label for="nomor_rumah"><strong>Tempat Lahir</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['tempat_lahir'] }}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="alamat"><strong>Agama</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data->Agama->nama }}
                </div>
                <div class="col-md-1 my-auto">
                    <label for="nomor_rumah"><strong>Jenis Kelamin</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['jenis_kelamin'] }}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="alamat"><strong>Telepon</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['telepon'] }}
                </div>
                <div class="col-md-1 my-auto">
                    <label for="nomor_rumah"><strong>E-Mail</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['email'] }}
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-md-1 my-auto">
                    <label for="alamat"><strong>Foto</strong></label>
                </div>
                <div class="col-md-5">
                    {{ $data['foto'] }}
                </div>
            </div>
        </div>

    </div>
    <!-- end panel-body -->
    <!-- begin panel-footer -->
    {{-- <div class="panel-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div> --}}
    <!-- end panel-footer -->
  </div>
  <!-- end panel -->
</form>
<a href="javascript:history.back(-1);" class="btn btn-success">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</a>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
@endpush
