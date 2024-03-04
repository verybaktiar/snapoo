@extends('layouts.app')
@section('contents')
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Services</li>
        </ol>
    </div>

    <div class="card mb-4">
        <form action="{{url('services/'.$services->id_services)}}" method="POST">
            @csrf
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Service</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Service</label>
                    <input type="text" class="form-control" name="nama_service" id="nama_service" value="{{$services->nama_service}}" placeholder="Nama Service" autofocus required>
                </div>
                <div class="form-group">
                    <label for="nama">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" value="{{$services->harga}}" placeholder="Masukan Harga" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{$services->keterangan}}" placeholder="Keterangan" required>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!--Row-->


    @endsection