@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Tugas' : 'Create Tugas' )

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
<form action="{{ isset($data) ? route(ugas.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

  <div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
      <h4 class="panel-title">Form @yield('title')</h4>'admin.master-data.tugas.update', $data->id) : route('admin.master-data.t
      <div class="panel-heading-btn">
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      </div>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body">

        <form action="/upload/proses" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

      <div class="form-group">
        <label for="name">Judul</label>
        <input type="text" id="judul" name="judul" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->judul ?? old('judul') }}}">
      </div>
      <div class="form-group">
        <label for="name">Isi</label>
        <input type="text" id="isi" name="isi" class="form-control" autofocus data-parsley-required="true" value="{{{ $data->isi ?? old('isi') }}}">
      </div>
      <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                {{-- <img src="{{ asset($data->foto)}}" alt="" srcset=""> --}}
            </div>
            {{-- <img src="{{ asset('storage/app/public/foto')$data->foto }}" alt="" srcset=""> --}}
        </div>
      @php
                $imageSrc = null;
                if(isset($data->dokumen)){
                $imageSrc = $data->dokumen->toArray();
                }
                @endphp
      <div class="form-group">
        <label for="name">File Tugas</label>
        <x-form.ImageUploader :imageSrc="isset($imageSrc) ? asset(DataHelper::filterDokumenData($imageSrc, 'nama', 'file')->first()['public_url']) : null" name="file" title="file" value="{{{ $data->dokumen  ?? old('file') }}}" />
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
