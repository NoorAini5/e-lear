@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Kelas' : 'Create Kelas' )

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
<form action="{{ isset($data) ? route('admin.master-data.tmpresensi.update', $data->id) : route('admin.master-data.tmpresensi.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
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
        <label for="name">Mapel</label>
        <x-form.Dropdown name="mapel" :options="$jenis_mapel" selected="{{{ old('mapel') ?? ($data['mapel'] ?? null) }}}" required />
      </div>
      <div class="form-group">
        <label for="name">Hari</label>
        <input type="day" id="hari" name="hari" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->hari ?? old('hari') }}}">
      </div>
      <div class="form-group">
        <label for="name">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->tanggal ?? old('tanggal') }}}">
      </div>
      <div class="form-group">
        <label for="name">Jam Mulai</label>
        <input type="time" id="jam_mulai" name="jam_mulai" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jam_mulai ?? old('jam_mulai') }}}">
      </div>
      <div class="form-group">
        <label for="name">Jam Akhir</label>
        <input type="time" id="jam_akhir" name="jam_akhir" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->jam_akhir ?? old('jam_akhir') }}}">
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
