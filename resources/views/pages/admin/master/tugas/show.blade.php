<br>
{{ $data->judul }}

@foreach ($jawabantugas as $i)
    <div class="">
        <p>{{$i->jawaban}}</p>
        <br>
    </div>
    <ul></ul>
@endforeach
