@extends('layouts.app')
@section('contents')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Data Pelanggan</strong>
            <div class="col-auto">
                <a href="{{ url('pelanggan/create') }}" class="btn btn-primary btn-sm mb-3 float-right">Tambah Data Pelanggan</a>
                <a href="/pelanggan/exportexcel" class="btn btn-primary my-3" target="_blank">Download File Excel</a>
                <a href="/pelanggan/importexcel" class="btn btn-secondary my-3" data-toggle="modal" data-target="#exampleModal">Upload Data Pelanggan</a>
                <a href="/pelanggan/exportpdf" class="btn btn-info my-3" target="_blank">Download File PDF</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="/pelanggan/create" class="bi bi-plus blue-color float-right"></a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Harga</th>
                        <th>Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <th>
                        @foreach($pelanggan as $key => $pelanggan)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $pelanggan->nama }}</td>
                            <td>{{ $pelanggan->email }}</td>
                            <td>{{ $pelanggan->no_telp }}</td>
                            <td>Rp. {{ number_format($pelanggan->harga, ($pelanggan->harga % 1 == 0) ? 0 : 2, ',', '.') }}</td>
                            <td>{{ $pelanggan->produk }}</td>
                            <td>
                               
                                <a href="{{ url('pelanggan/edit/'.$pelanggan->nama) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ url('pelanggan/delete/'.$pelanggan->nama) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Paket Ini?')">Hapus</a>
                            </td>
                        </tr>
                        </tr>
                        @endforeach
                    </th>
                </tbody>
            </table>
        </div> <!-- /.table-stats -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Upload Data Pelanggan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="/pelanggan/importexcel" method="POST" enctype="multipart/form-data">
                           {{ csrf_field() }}
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="excelFile">Pilih File Excel</label>
                                        <input type="file" class="form-control-file" id="file" name="file" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
</div>

@endsection