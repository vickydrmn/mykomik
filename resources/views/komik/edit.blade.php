@extends('layout')

@section('konten')

<h4>Edit komik</h4>

<form action="{{ route('komik.update', $komik->id)}}" method="post">
    @csrf
    <label>No</label>
    <input type="number" name="no" value="{{$komik->no}}" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" value="{{$komik->nama}}" class="form-control mb-2">
    <label>Genre</label>
    <input type="text" name="genre" value="{{$komik->genre}}"  class="form-control mb-2">
    <label>tanggal_update</label>
    <input type="text" name="tanggal_update" value="{{$komik->tanggak_update}}"  class="form-control mb-2">
    <label>tanggal_rilis</label>
    <input type="text" name="tanggal_rilis" value="{{$komik->tanggal_rilis}}" class="form-control mb-2">
    <label>Autor</label>
    <input type="text" name="autor"  value="{{$komik->autor}}" class="form-control mb-2">
    
    <button class="btn btn-primary">Edit</button>
</form>

@endsection