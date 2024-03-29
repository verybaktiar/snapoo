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
            <strong class="card-title">Data Pelanggan</strong>
            <div class="col-auto">
                <a href="{{ url('services/tambah') }}" class="btn btn-primary my-3">Tambah Data Services Extra</a>
                <a href="/pelanggan/exportexcel" class="btn btn-primary my-3" target="_blank">Download File Excel</a>
                <a href="/pelanggan/importexcel" class="btn btn-secondary my-3" data-toggle="modal" data-target="#exampleModal">Upload Data Pelanggan</a>
                <a href="/pelanggan/exportpdf" class="btn btn-info my-3" target="_blank">Download File PDF</a>
            </div>
            <!-- <div class="row">
                <div class="col-12">
                    <a href="/pelanggan/create" class="bi bi-plus blue-color float-right"></a>
                </div>
            </div> -->
        </div>
        <!-- <div class="card-header">
            <strong class="card-title">Data Produk</strong>
        </div>
        <div class="table-stats order-table ov-h">
            <a href="{{ url('produk/tambah') }}" class="btn btn-primary">Tambah Data</a> -->
        <table class="table ">
            <thead>
                <tr>
                    <th class="serial">No</th>
                    <th class="avatar">Nama Services</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach($services as $service)
                <tr>
                    <td class="serial">{{ $loop->iteration }}</td>
                    <td>{{ $service->nama_service }}</td>
                    <td>{{ $service->keterangan }}</td>
                    <td>{{ $service->harga }}</td>
                    <td>
                        <a href="{{ url('services/edit/' . $service->id_services) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                           <!-- Link untuk membuka modal -->
                           <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal{{$service->id_services}}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
                 <!-- Modal konfirmasi -->
                 <div class="modal fade" id="hapusModal{{$service->id_services}}" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel{{$service->id_services}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="hapusModalLabel{{$service->id_services}}">Konfirmasi Hapus Data</h5>
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
                                    <a href="{{ url('services/hapus/' . $service->id_services) }}" class="btn btn-danger">Ya, Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
               
            </tbody>
        </table>
    </div> <!-- /.table-stats -->
</div>
</div>

@endsection