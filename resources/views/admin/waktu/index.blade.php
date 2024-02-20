@extends('layouts.app')
@section('contents')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Tambah Waktu Booking </strong>
            <div class="col-auto">
                <a href="{{ url('waktu/tambah') }}" class="btn btn-primary my-3">Tambah Waktu Booking</a>
           
        </div>
      
        <table class="table ">
            <thead>
                <tr>
                    <th class="serial">No</th>
                    <th class="avatar">Waktu</th>
                    <th class="avatar">Tersedia</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach($data as $key => $value)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->waktu }}</td>
                    <td>{{ $value->tersedia }}</td>
                    <td>
                        <a href="{{ url('waktu/edit/'.$value->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ url('waktu/hapus/'.$value->id) }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div> <!-- /.table-stats -->
</div>
</div>

@endsection