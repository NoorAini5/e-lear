@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Mapel' : 'Create Mapel' )

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
<form action="{{ isset($data) ? route('admin.master-data.mapel.update', $data->id) : route('admin.master-data.mapel.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
        <label for="name">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->nama ?? old('nama') }}}">
      </div>
      <div class="form-group">
        <label for="name">Jurusan</label>
        <x-form.Dropdown name="jurusan" :options="$jenis_jurusan" selected="{{{ old('jurusan') ?? ($data['jurusan'] ?? null) }}}" required />
      </div>
      <div class="form-group">
        <label for="name">Guru</label>
        <x-form.Dropdown name="guru" :options="$jenis_guru" selected="{{{ old('guru') ?? ($data['guru'] ?? null) }}}" required />
      </div>
      <div class="form-group">
        <label for="name">Deskripsi</label>
        <input type="text" id="deskripsi" name="deskripsi" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->deskripsi ?? old('deskripsi') }}}">
      </div>
      <div class="form-group">
        <label for="name">SKS</label>
        <input type="text" id="sks" name="sks" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->sks ?? old('sks') }}}">
      </div>
      <div class="form-group">
        <label for="name">Semester</label>
        <input type="text" id="semester" name="semester" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->semester ?? old('semester') }}}">
      </div>
    </div>
    <!-- end panel-body -->
    <!-- begin panel-footer -->
    <div class="panel-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
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
