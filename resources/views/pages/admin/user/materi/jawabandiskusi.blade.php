<form action="{{ isset($data) ? route('user.jawabandiskusi.update', $data->id) : route('user.jawabandiskusi.store') }}" id="form" name="form" method="POST" data-parsley-validate="true">
    <div class="form-group">
        <label for="name">Jawaban Anda</label>
        <input type="text" id="jawaban" name="jawaban" class="form-control" autofocus data-parsley-required="true" value="{{{ old('jawaban') ?? ($data['jawaban'] ?? null) }}}">
    </div>
    <div class="form-group">
        {{-- <label for="name">Jawaban Anda</label> --}}
        <input type="hidden" name="diskusi_id" value="{{ $diskusi->id }}">
    </div>
    {{-- <input style="margin-top 10px" type="submit" class="btn btn-primary" value="kirim"> --}}

    <div class="panel-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-default">Reset</button>
      </div>
</form>
