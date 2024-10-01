@extends('layout')

@section('konten')

<h4>Edit Komik</h4>

<form action="{{ route('komik.update', $komik->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>No <span style="color: red;">*</span></label>
    <input type="number" name="no" value="{{$komik->no}}" class="form-control mb-2" required>

    <label>Gambar <span style="color: red;">*</span></label>
    <input type="file" name="gambar" class="form-control mb-2" required>

    <label>Nama <span style="color: red;">*</span></label>
    <input type="text" name="nama" value="{{$komik->nama}}" class="form-control mb-2" required>

    <label>Genre <span style="color: red;">*</span></label>
    <input type="text" name="genre" value="{{$komik->genre}}" class="form-control mb-2" required>

    <label>Tanggal Update <span style="color: red;">*</span></label>
    <input type="date" name="tanggal_update" value="{{$komik->tanggal_update}}" class="form-control mb-2" required>

    <label>Tanggal Rilis <span style="color: red;">*</span></label>
    <input type="date" name="tanggal_rilis" value="{{$komik->tanggal_rilis}}" class="form-control mb-2" required>

    <label>Autor <span style="color: red;">*</span></label>
    <input type="text" name="autor" value="{{$komik->autor}}" class="form-control mb-2" required>

    <button class="btn btn-primary">Edit</button>
</form>

@endsection