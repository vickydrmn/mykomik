@extends('layout')

@section('konten')


<div class="d-flex">
<h4>list komik</h4>
<div class="ms-auto">
    <a class="btn btn-success"  href="{{ route('komik.tambah')}}">Tambah Komik</a>
</div>
    
</div>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Genre</th>
        <th>Tanggal Update</th>
        <th>Tanggal Rilis</th>
        <th>Autor</th>
        <th>Aksi</th>
    </tr>
    @foreach($komik as $no=>$data)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->genre}}</td>
        <td>{{$data->tanggal_update}}</td>
        <td>{{$data->tanggal_rilis}}</td>
        <td>{{$data->autor}}</td>
        <td>
            <a href="{{ route('komik.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('komik.delete', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection