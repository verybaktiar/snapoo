@extends('layouts.app')
@section('contents')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Paket</li>
        </ol>
    </div>

    <div class="card mb-4">
        <form action="{{url('produk/'.$data->id)}}" method="POST">
            @csrf
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Paket</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Paket</label>
                    <input type="text" class="form-control" name="nama_paket" id="nama_paket" value="{{$data->nama_paket}}" placeholder="Nama Paket" autofocus required>
                </div>
                <div class="form-group">
                    <label for="nama">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" value="{{$data->harga}}" placeholder="Masukan Harga" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{$data->deskripsi}}" placeholder="Deskripsi Paket" required>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Gambar</label>
                    <input class="form-control" type="file" name="gambar" id="formFile">
                </div>
                <div class="form-group">
                <label for="slot">Kuota</label>
                <input type="text" class="form-control" name="slot" id="slot" value="{{$data->slot}}" placeholder="Kuota" required>
            </div>

               

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!--Row-->


    @endsection