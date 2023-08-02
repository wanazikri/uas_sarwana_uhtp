@extends('layout1.main2')
@section('username','Desi Ratna Sari')
@section('content')


<h4><b>Tambah Buku</b></h4>
<br>
<form action="{{ route('simpan_buku') }}" method="POST">
@csrf
@method('PUT')
<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">Kode Buku</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="kode">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Judul Buku</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="judul">
    </div>
</div>

<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="penulis">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="penerbit">
    </div>
</div>

<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="tahun">
    </div>
</div>

<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Jumlah Halaman</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" name="hal">
    </div>
</div>
<input type="submit" class="btn btn-xm btn-primary" value="Simpan">
</form> 

@endsection