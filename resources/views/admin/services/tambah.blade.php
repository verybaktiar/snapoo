@extends('layouts.app')
@section('contents')


    <div class="card">
        <div class="card-header">
            <strong class="card-title">Tambah Data Services extra</strong>

            <div class="col-lg-15">
                <form action="/pelanggan/store" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header"><strong>Form</strong><small> Data Pelanggan</small></div>
                        <div class="card-body card-block">
                            <div class="form-group"><label for="nama" class=" form-control-label">Nama</label><input type="text" id="nama" placeholder="Masukkan Nama Lengkap Pelanggan" class="form-control"></div>
                            <div class="form-group"><label for="email" class=" form-control-label">email</label><input type="text" id="email" placeholder="Masukkan Alamat Email" class="form-control"></div>
                            <div class="form-group"><label for="no_telp" class=" form-control-label">no_telp</label><input type="text" id="no_telp" placeholder="No Telepon" class="form-control"></div>
                            <div class="form-group"><label for="harga" class=" form-control-label">harga</label><input type="text" id="harga" placeholder="Harga Produk" class="form-control"></div>
                            <div class="form-group"><label for="produk" class=" form-control-label">produk</label><input type="text" id="produk" placeholder="Nama Produk" class="form-control"></div>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
            </div>
            </form>

        </div>
    </div> -->

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Siswa</li>
        </ol>
    </div>

    <div class="card mb-4">
        <!-- <form action="/produk/store" method="POST">
            @csrf -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Produk</h6>
            </div>
            <div class="card-body">
                <form action="/services/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Services</label>
                        <input type="text" class="form-control" name="nama_service" id="nama_service" placeholder="Nama Service Extra" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukan Harga" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </form>
    </div>
    <!--Row-->


    @endsection