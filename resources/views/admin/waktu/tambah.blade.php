@extends('layouts.app')
@section('contents')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Waktu Booking</li>
        </ol>
    </div>

    <div class="card mb-4">
        <!-- <form action="/produk/store" method="POST">
            @csrf -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data </h6>
            </div>
            <div class="card-body">
                <form action="/waktu/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Waktu</label>
                        <input type="time" class="form-control" name="waktu" id="waktu" placeholder="Nama Paket" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Tersedia</label>
                        <input type="number" class="form-control" name="tersedia" id="tersedia" placeholder="Tersedia" autofocus required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <!-- </form> -->
    </div>
    <!--Row-->


@endsection
