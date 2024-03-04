@extends('layouts.app')
@section('contents')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
        @if(session()->has('pesan'))
            <!-- Tampilkan pesan session dalam bentuk Toastr saat dokumen dimuat -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Panggil metode Toastr
                    toastr.success("{{ session('pesan') }}");
                });
            </script>
            @endif
            @if(session()->has('hapus'))
            <!-- Tampilkan pesan session dalam bentuk Toastr saat dokumen dimuat -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Panggil metode Toastr
                    toastr.warning("{{ session('hapus') }}");
                });
            </script>
            @endif
            <strong class="card-title">Data Reservasi</strong>
            <div class="col-auto">
                <a href="{{ url('services/tambah') }}" class="btn btn-primary my-3">Tambah Data Services Extra</a>
                <a href="/pelanggan/exportexcel" class="btn btn-primary my-3" target="_blank">Download File Excel</a>
                <a href="/pelanggan/importexcel" class="btn btn-secondary my-3" data-toggle="modal" data-target="#exampleModal">Upload Data Pelanggan</a>
                <a href="/pelanggan/exportpdf" class="btn btn-info my-3" target="_blank">Download File PDF</a>
            </div>
        </div>

        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Tanggal Reservasi</th>
                        <th>Waktu Reservasi</th>
                        <th>Total</th>
                        <th>Nama Paket</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $reservasi)
                    <tr>
                        <td class="serial">{{ $loop->iteration }}</td>
                        <td>{{ $reservasi->nama }}</td>
                        <td>{{ $reservasi->email }}</td>
                        <td>{{ $reservasi->no_hp }}</td>
                        <td>{{ $reservasi->alamat }}</td>
                        <td>{{ $reservasi->tanggal }}</td>
                        <td>{{ $reservasi->waktu }}</td>
                        <td>{{ $reservasi->subtotal }}</td>
                        <td>{{ $reservasi->nama_paket }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/reservasi/edit/{{ $reservasi->id_reservasi }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal{{$reservasi->id_reservasi}}"><i class="fa fa-trash-o"></i></a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModal{{$reservasi->id_reservasi}}"><i class="fa fa-eye"></i></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.table-stats -->
    </div>
</div>

@foreach($data as $reservasi)
<div class="modal fade" id="detailModal{{$reservasi->id_reservasi}}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel{{$reservasi->id_reservasi}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel{{$reservasi->id_reservasi}}">Detail Reservasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Nama Lengkap: {{ $reservasi->nama }}</p>
                <p>Email: {{ $reservasi->email }}</p>
                <p>No. Telepon: {{ $reservasi->no_hp }}</p>
                <p>Alamat: {{ $reservasi->alamat }}</p>
                <p>Tanggal Reservasi: {{ $reservasi->tanggal }}</p>
                <p>Waktu Reservasi: {{ $reservasi->waktu }}</p>
                <p>Total: {{ $reservasi->subtotal }}</p>
                <p>Nama Paket: {{ $reservasi->nama_paket }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
</td>
<div class="modal fade" id="hapusModal{{$reservasi->id_reservasi}}" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel{{$reservasi->id_reservasi}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalLabel{{$reservasi->id_reservasi}}">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <!-- Link untuk menghapus data -->
                <a href="{{ url('reservasi/hapus/' . $reservasi->id_reservasi) }}" class="btn btn-danger">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>

</tr>


</tbody>
</table>
</div> <!-- /.table-stats -->
</div>
</div>


@endsection