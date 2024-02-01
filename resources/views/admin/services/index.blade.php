@extends('layouts.app')
@section('contents')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
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
                        <a href="/services/edit/{{ $service->id_services }}" class="btn btn-warning">Edit</a>
                        <a href="/services/delete/{{ $service->id_services }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div> <!-- /.table-stats -->
</div>
</div>

@endsection