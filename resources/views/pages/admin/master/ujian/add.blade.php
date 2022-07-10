@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', isset($data) ? 'Edit Agama' : 'Buat Ujian' )

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

<a href="javascript:history.back(-1);" class="btn btn-success mb-3">
  <i class="fa fa-arrow-circle-left"></i> Kembali
</a>

<!-- begin panel -->
<form action="{{ route('admin.master-data.ujian.store') }}" id="form" name="form" method="POST">
  @csrf
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
        <label for="name">Judul</label>
        <input type="text" id="judul" name="judul" class="form-control" autofocus data-parsley-required="true" value="{{ old('judul') ?? ($data['judul'] ?? null) }}">
      </div>
      <div class="form-group">
        <label for="name">Mata Pelajaran</label>
        <x-form.Dropdown name="mapel" :options="$jenis_mapel" selected="{{ old('mapel') ?? ($data['mapel'] ?? null) }}" required />
      </div>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-md-6">
      <button class="btn btn-primary" id="question--add"><i class="fa fa-plus"></i> Tambah Pertanyaan</button>
    </div>
    <div class="col-md-6 text-right">
      <button class="btn btn-success" id="survey--save"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div>

  <div class="row mb-5" id="question--content"></div>
  <!-- end panel -->
</form>

@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
<script>

  function randId(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
  }

  function generateNextAlphabet(value)
  {
      const str = value
      const nextLetter = String.fromCharCode(str.charCodeAt(str.length - 1) + 1)
      return nextLetter
  }

  $(document).on('click','#question--add', function(e){
      e.preventDefault()

      let lastNumber = $('#question--content .question--items').length + 1

      let itemIds = randId(12),
          removeQuestionIds = itemIds+'-qr';

      let questionAnswerContent = itemIds+'-'+randId(11),
          questionAnswerCheck = questionAnswerContent+'-check',
          questionAnswerAdd = questionAnswerContent+'-add',
          questionAnswerItemIds = questionAnswerContent+'-'+randId(5)+'-items';

      let actionRemoveBtn = '';

      if(lastNumber > 1)
      {
          actionRemoveBtn = `<button class="btn btn-xs btn-danger ml-4 ${removeQuestionIds}" title="Hapus">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                              </button>`
      }

      let content = `<div class="col-md-6 question--items ${itemIds} mb-3">
                          <div class="card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-6 d-flex align-items-end">
                                          <strong>${lastNumber}.</strong>
                                      </div>
                                      <div class="col-6 text-right d-flex align-items-end justify-content-end">
                                          ${actionRemoveBtn}
                                      </div>
                                  </div>
                                  <div class="mb-3">
                                      <label for="" class="mb-2">Pertanyaan</label>
                                      <textarea rows="2" class="form-control question--input" name="soal[${lastNumber-1}][text]"></textarea>
                                      <div class="error__msg question-${lastNumber-1}--error"></div>
                                  </div>
                                  <div class="mb-2">
                                      <label for="">Jawaban</label>
                                  </div>
                                  <div class="${questionAnswerContent}">
                                      <div class="mb-3 question--answer-items">
                                          <div class="input-group align-items-center">
                                              <div class="form-check">
                                                <input class="form-check-input form-jawaban-benar" type="checkbox" name="soal[${lastNumber-1}][jawaban][0][benar]" id="jawaban-benar1" value="0">
                                                <label class="form-check-label" for="jawaban-benar1"></label>
                                              </div>
                                              <span class="input-group-text answer-item-alpha">A</span>
                                              <input type="text" class="form-control" hidden name="soal[${lastNumber-1}][jawaban][0][urutan_jawaban]" value="a">
                                              <input type="text" class="form-control question-answer--input" name="soal[${lastNumber-1}][jawaban][0][text]" placeholder="Jawaban A">
                                          </div>
                                          <div class="error__msg question-${lastNumber-1}-answer-0--error"></div>
                                      </div>
                                      <div class="mb-3 question--answer-items">
                                          <div class="input-group align-items-center">
                                              <div class="form-check">
                                                <input class="form-check-input form-jawaban-benar" type="checkbox" name="soal[${lastNumber-1}][jawaban][1][benar]" id="jawaban-benar2" value="0">
                                                <label class="form-check-label" for="jawaban-benar2"></label>
                                              </div>
                                              <span class="input-group-text answer-item-alpha">B</span>
                                              <input type="text" class="form-control" hidden name="soal[${lastNumber-1}][jawaban][1][urutan_jawaban]" value="b">
                                              <input type="text" class="form-control question-answer--input" name="soal[${lastNumber-1}][jawaban][1][text]" placeholder="Jawaban B">
                                          </div>
                                          <div class="error__msg question-${lastNumber-1}-answer-1--error"></div>
                                      </div>
                                      <div class="mb-3 question--answer-items">
                                          <div class="input-group align-items-center">
                                              <div class="form-check">
                                                <input class="form-check-input form-jawaban-benar" type="checkbox" name="soal[${lastNumber-1}][jawaban][2][benar]" id="jawaban-benar3" value="0">
                                                <label class="form-check-label" for="jawaban-benar3"></label>
                                              </div>
                                              <span class="input-group-text answer-item-alpha">C</span>
                                              <input type="text" class="form-control" hidden name="soal[${lastNumber-1}][jawaban][2][urutan_jawaban]" value="c">
                                              <input type="text" class="form-control question-answer--input" name="soal[${lastNumber-1}][jawaban][2][text]" placeholder="Jawaban C">
                                          </div>
                                          <div class="error__msg question-${lastNumber-1}-answer-2--error"></div>
                                      </div>
                                      <div class="mb-3 question--answer-items">
                                          <div class="input-group align-items-center">
                                              <div class="form-check">
                                                <input class="form-check-input form-jawaban-benar" type="checkbox" name="soal[${lastNumber-1}][jawaban][3][benar]" id="jawaban-benar4" value="0">
                                                <label class="form-check-label" for="jawaban-benar4"></label>
                                              </div>
                                              <span class="input-group-text answer-item-alpha">D</span>
                                              <input type="text" class="form-control" hidden name="soal[${lastNumber-1}][jawaban][3][urutan_jawaban]" value="d">
                                              <input type="text" class="form-control question-answer--input" name="soal[${lastNumber-1}][jawaban][3][text]" placeholder="Jawaban D">
                                          </div>
                                          <div class="error__msg question-${lastNumber-1}-answer-3--error"></div>
                                      </div>
                                      <div class="mb-3 question--answer-items">
                                          <div class="input-group align-items-center">
                                              <div class="form-check">
                                                <input class="form-check-input form-jawaban-benar" type="checkbox" name="soal[${lastNumber-1}][jawaban][4][benar]" id="jawaban-benar5" value="0">
                                                <label class="form-check-label" for="jawaban-benar5"></label>
                                              </div>
                                              <span class="input-group-text answer-item-alpha">E</span>
                                              <input type="text" class="form-control" hidden name="soal[${lastNumber-1}][jawaban][4][urutan_jawaban]" value="e">
                                              <input type="text" class="form-control question-answer--input" name="soal[${lastNumber-1}][jawaban][4][text]" placeholder="Jawaban E">
                                          </div>
                                          <div class="error__msg question-${lastNumber-1}-answer-4--error"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>`

      $(document).on('change', '.'+questionAnswerContent+' .form-jawaban-benar', function(){
        $(this).val(this.checked? 1 : 0)
        $('.'+questionAnswerContent+' .form-jawaban-benar').not($(this)).prop('checked',false).val(0)
      })

      $(document).on('click','.'+removeQuestionIds, function(e){
          e.preventDefault()
          $('.'+itemIds).remove()
      })

      if(lastNumber == 1)
      {
          $('#question--content').append(content)
      }else{
          $(content).insertAfter($('#question--content .question--items:last-child'))
      }

  })

  $('#question--add').trigger('click')

  function save_data(){
    
  }

</script>
@endpush
