@extends('layouts.user')

@section('content')
@php
    use App\Models\SiswaUjian;
@endphp

<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<!-- end datatables -->

<div class="mb-3">
    <h5 class="mb-3">
       {{ $ujian->judul }}
    </h5>
</div>
<form action="" method="POST">
    @csrf
    <input type="text" name="ujian_id" value="{{ $ujian->id }}" hidden>
    <div id="ujian--content" class="row">
        @php
            $soalIndex = 0;
        @endphp
        @foreach ($ujian->soal as $item)
            <div class="col-md-6 ujian-items {{ $loop->index > 0? 'd-none' : '' }}">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <h5>{{ $loop->iteration }}. {{ $item->soal }}</h5>
                        </div>
                        <div class="list-group">

                        </div>

                        @foreach ($item->jawaban as $jawaban)
                        @php
                            $user_jawaban = SiswaUjian::where([
                                'user_id' => auth()->id(),
                                'ujian_id' => $ujian->id,
                                'ujian_soal_id' => $jawaban->ujian_soal_id,
                                'ujian_soal_jawaban_id' => $jawaban->id])->first();
                        @endphp

                        <div class="list-group-item {{ $user_jawaban? ($jawaban->benar == '1'? 'bg-success text-white' : 'bg-danger text-white') : ($jawaban->benar == '1'? 'bg-success text-white' : '') }}">
                            <b>{{ $jawaban->urutan }}</b>. {{ $jawaban->jawaban }}
                        </div>
                        @endforeach
                        <div class="d-flex justify-content-between mt-4">
                            @if ($loop->index > 0)

                                <button type="button" class="btn btn-primary btn--sebelumnya"><i class="fa fa-angle-left"></i> Sebelumnya
                                </button>
                            @endif
                            @if ($loop->iteration == count($ujian->soal))
                            @else
                                <button type="button" class="btn btn-success ml-auto btn--lanjut">Lanjut
                                    <i class="fa fa-angle-right"></i></button>

                            @endif
                            <a href="javascript:history.back();" class="btn btn-success mb-3">
                                <i class="fa fa-arrow-circle-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $soalIndex++;
            @endphp
        @endforeach
    </div>
</form>
@endsection
@push('scripts')
<script>

    $(document).on('click','.btn--lanjut', function(e){
        e.preventDefault();
        $(this).parents('.ujian-items').addClass('d-none')
        $(this).parents('.ujian-items').next().removeClass('d-none')
    })

    $(document).on('click','.btn--sebelumnya', function(e){
        e.preventDefault();
        $(this).parents('.ujian-items').addClass('d-none')
        $(this).parents('.ujian-items').prev().removeClass('d-none')
    })

</script>
@endpush
