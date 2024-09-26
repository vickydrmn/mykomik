@extends('layout')

@section('konten')

<h4>Tambah komik</h4>

<form action="{{ route('komik.submit')}}" method="post">
    @csrf
    <label>No</label>
    <input type="number" name="no" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Genre</label>
    <input type="text" name="genre" class="form-control mb-2">
    <label>tanggal_update</label>
    <input type="text" name="tanggal_update" class="form-control mb-2">
    <label>tanggal_rilis</label>
    <input type="text" name="tanggal_rilis" class="form-control mb-2">
    <label>Autor</label>
    <input type="text" name="autor" class="form-control mb-2">
    
    <button class="btn btn-primary">Tambah</button>
</form>

@endsection