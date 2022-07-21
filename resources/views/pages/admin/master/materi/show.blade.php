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
{{-- <form action="{{ isset($data) ? route('admin.master-data.guru.update', $data->id) : route('admin.master-data.guru.store') }}" id="form" name="form" method="POST" data-parsley-validate="true"> --}}
  @csrf
  @if(isset($data))
  {{ method_field('PUT') }}
  @endif

 <!-- begin materi-->
 <div class="tab-pane fade active show" id="default-tab-1">
    <h3 class="m-t-10">Materi</h3>
    <p>
                {{-- <div class="card">
                            <div class="">
                                <table class="table">
                                    <thead>
                                        <tr> <td width="50" class="text-right"><b> Nama Mata Kuliah </b></td> <td width="10"> : </td> <td width="300"> {{ $mapel->nama }} </td> </tr>
                                        <tr> <td class="text-right"><b> Jumlah SKS </b></td> <td> : </td> <td> {{ $mapel->sks }} </td> </tr>
                                        <tr> <td class="text-right"><b> Semester </b></td> <td> : </td>  <td>{{ $mapel->semester }} </td> </tr>
                                    </thead>

                                </table>

                            </div>
                </div> --}}

    {{-- <style type="text/css">

        .modal-dialog  {width:92%;}

        .docs {
            position: relative;
            padding-bottom: 40%;
            height: 0;
            overflow: hidden;
        }
        .docs iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .modal {
            z-index: 9000;
        }
        .overlay {
            z-index: 8000;
        }
        .header {
            z-index: 7000;
        }

    </style> --}}



    <div class="card">
        <div class="">
            <table class="table">
                <thead>
                    {{-- <tr> <td width="50" class="text-right"><b> Nama Mata Kuliah </b></td> <td width="10"> : </td> <td width="300"> {{ $mapel->nama }} </td> </tr> --}}
                    {{-- <tr> <td class="text-right"><b> Jumlah SKS </b></td> <td> : </td> <td> {{ $mapel->sks }} </td> </tr>
                    <tr> <td class="text-right"><b> Semester </b></td> <td> : </td>  <td>{{ $mapel->semester }} </td> </tr> --}}
                </thead>

            </table>

        </div>
</div>


<div class="text-center">
    <br>
    <h1>  {{ $data['nama']  }} </h1>
    <h4>  {{ $data['isi']  }} </h4>
    {{-- <h4>  {{ $data['nama_file']  }} </h4>
    <h4>  {{ $data['video']  }} </h4> --}}
    <div class="">
        <h3><a href="/downloadMateri/{{ $data->nama_file }}">{{ $data->nama_file }}</a></h3>
            @isset($data->video)
            <video width="10%" max-width="50" height="auto" controls>
                <source src="{{ asset('/video/'.$data->video) }}">
            </video>
            @endisset
    </div>
 </div>

    </p>
</div>
<!-- end materi -->
