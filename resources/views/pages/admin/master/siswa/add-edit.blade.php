@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Agama' : 'Create Agama' )

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

    <form action="{{ isset($data) ? route('admin.master-data.siswa.update', $data->id) : route('admin.master-data.siswa.store') }}" id="form" name="form" method="POST" enctype="multipart/form-data" data-parsley-validate="true">

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
          <input type="text" id="nama" name="nama" class="form-control" autofocus data-parsley-required="true" value="{{{ old('nama') ?? ($data['nama'] ?? null) }}}">
        </div>
        <div class="form-group">
            <label for="name">NIS</label>
            <input type="text" id="nis" name="nis" class="form-control" autofocus data-parsley-required="true" value="{{{ old('nis') ?? ($data['nis'] ?? null) }}}">
          </div>
          <div class="form-group">
            <label for="name">No Induk</label>
            <input type="text" id="no_induk" name="no_induk" class="form-control" autofocus data-parsley-required="true" value="{{{ old('no_induk') ?? ($data['no_induk'] ?? null) }}}">
          </div>
          <div class="form-group">
            <label for="name">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" autofocus data-parsley-required="true" value="{{{ old('tempat_lahir') ?? ($data['tempat_lahir'] ?? null) }}}">
          </div>
          <div class="form-group">
            <label for="name">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" autofocus data-parsley-required="true" value="{{{ old('tanggal_lahir') ?? ($data['tanggal_lahir'] ?? null) }}}">
          </div>
        <div class="form-group">
          <label for="name">Alamat</label>
          <input type="text" id="alamat" name="alamat" class="form-control" autofocus data-parsley-required="true" value="{{{ old('alamat') ?? ($data['alamat'] ?? null) }}}">
        </div>
        <div class="form-group">
            <label for="name">Agama</label>
            <x-form.Dropdown name="agama" :options="$jenis_agama" selected="{{{ old('agama') ?? ($data['agama'] ?? null) }}}" required />
          </div>
        <div class="form-group">
          <label for="name">Jenis Kelamin</label>
          <div class="input-group">
              <x-form.genderRadio name="jenis_kelamin" selected="{{{ old('jenis_kelamin') ?? ($data['jenis_kelamin'] ?? null) }}}"/>
          </div>
        </div>
        <div class="form-group">
          <label for="name">Telepon</label>
          <input type="text" id="telepon" name="telepon" class="form-control" autofocus data-parsley-required="true" value="{{{ old('telepon') ?? ($data['telepon'] ?? null) }}}">
        </div>
        <div class="form-group">
          <label for="name">Email</label>
          <input type="text" id="email" name="email" class="form-control" autofocus data-parsley-required="true" value="{{{ old('email') ?? ($data['email'] ?? null) }}}">
        </div>
        <div class="form-group">
            <label for="name">Foto</label>
            <input type="file" id="foto" name="foto" class="form-control" autofocus data-parsley-required="true" value="{{{ old('foto') ?? ($data['foto'] ?? null) }}}">
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
