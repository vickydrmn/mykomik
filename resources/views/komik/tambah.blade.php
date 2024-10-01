@extends('layout')

@section('konten')

<h4>Tambah komik</h4>

<form action="{{ route('komik.submit')}}" method="post">
    @csrf
    <label>No <span style="color: red;">*</span></label>
    <input type="number" name="no" class="form-control mb-2" required>
    <label>Gambar <span style="color: red;">*</span></label>
    <input type="file" name="gambar" class="form-control mb-2" required>
    <label>Nama <span style="color: red;">*</span></label>
    <input type="text" name="nama" class="form-control mb-2" required>
    <label>Genre <span style="color: red;">*</span></label>
    <input type="text" name="genre" class="form-control mb-2" required>
    <label>tanggal_update <span style="color: red;">*</span></label>
    <input type="text" name="tanggal_update" class="form-control mb-2" required>
    <label>tanggal_rilis <span style="color: red;">*</span></label>
    <input type="text" name="tanggal_rilis" class="form-control mb-2" required>
    <label>Autor <span style="color: red;">*</span></label>
    <input type="text" name="autor" class="form-control mb-2" required>

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection