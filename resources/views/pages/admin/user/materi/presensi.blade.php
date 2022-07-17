<div class="row">
                    
                    <div class="col-md-3">
                        @if($presensi->jam_absen == null)
                        
                        <div class="card border-success border">
                            <div class="card-body">
                                <form action="/simpanPresensi/{{ $presensi->id}}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="jam_absen" value="{{ $localtime }}">
                                    <input type="hidden" name="keterangan" value="Hadir">
                                    <button class="btn btn-primary">  Simpan </button>
                                </form>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                        @else
                        <div class="card border-secondary border">
                            <div class="card-body">
                                <h4 class="card-title text-center">{{ $presensi->tmpresensi->hari }},  {{ $presensi->tmpresensi->tanggal }}</h4>
                                <p class="text-center">{{ $presensi->tmpresensi->jam_mulai }} - {{ $presensi->tmpresensi->jam_akhir }}</p>
                                <p class="text-center">Keterangan : {{ $presensi->keterangan }}</p>
                                <div class="d-grid">
                                    {{-- <a href="/absen/{{ Crypt::encrypt($a->id) }}" class="btn btn-secondary btn-sm">Absen</a> --}}
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                         @endif
                    </div> <!-- end col-->

            </div>
