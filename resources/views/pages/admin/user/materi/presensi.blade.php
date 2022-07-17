<div class="row">
                    @foreach($presensi as $a)
                    <div class="col-md-3">
                        {{-- @if($a->jam_absen == null) --}}
                        {{-- @if (is_null($a->jam_absen)) --}}
                        {{-- @if($a->keterangan == "Belum Presensi") --}}
                        <div class="card border-success border">
                            <div class="card-body">
                                <form action="/simpanPresensi/{{ $a->id}}">
                                    <input type="hidden" name="jam_absen" value="{{ $localtime }}">
                                    <input type="hidden" name="keterangan" value="hadir">
                                    <button class="btn btn-primary">  Simpan </button>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                        {{-- @else
                        <div class="card border-secondary border">
                            <div class="card-body">
                                <h4 class="card-title text-center">{{ $a->tmpresensi->hari }},  {{ $a->tmpresensi->tanggal }}</h4>
                                <p class="text-center">{{ $a->tmpresensi->jam_mulai }} - {{ $a->tmpresensi->jam_akhir }}</p>
                                <p class="text-center">Keterangan : {{ $a->keterangan }}</p>
                                <div class="d-grid">
                                    {{-- <a href="/absen/{{ Crypt::encrypt($a->id) }}" class="btn btn-secondary btn-sm">Absen</a> --}}
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                        {{-- @endif --}}
                    </div> <!-- end col-->
                    @endforeach

            </div>
