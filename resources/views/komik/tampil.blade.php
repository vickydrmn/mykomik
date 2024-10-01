@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>List Komik</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('komik.tambah')}}">Tambah Komik</a>
    </div>
</div>

<form action="{{ route('komik.tampil') }}" method="GET" class="mb-3">
    <input type="text" name="search" placeholder="Cari komik..." class="form-control" value="{{ request('search') }}">
    <button type="submit" class="btn btn-primary mt-2">Cari</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Genre</th>
            <th>Tanggal Update</th>
            <th>Tanggal Rilis</th>
            <th>Autor</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($komik as $no => $data)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $data->gambar }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->genre }}</td>
            <td>{{ $data->tanggal_update }}</td>
            <td>{{ $data->tanggal_rilis }}</td>
            <td>{{ $data->autor }}</td>
            <td>
                <a href="{{ route('komik.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('komik.delete', $data->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection