@extends('layout1.main2')
@section('username','Desi Ratna Sari')
@section('content')


<h4><b>Edit Data Buku</b></h1>
<br>
<form action="{{ route('update_buku') }}" method="POST">

@csrf
@method('PATCH')
<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">Kode Buku</label>
    <div class="col-sm-10">
    <input value="{{ $buku->id}}" type="hidden" name="id">
    <input value="{{ $buku->kode}}" type="text" class="form-control" name="kode">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Judul Buku</label>
    <div class="col-sm-10">
    <input value="{{ $buku->judul_buku}}" type="text" class="form-control" name="judul">
    </div>
</div>

<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
    <input value="{{ $buku->penulis_buku}}" type="text" class="form-control" name="penulis">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
    <input value="{{ $buku->penerbit_buku}}" type="text" class="form-control" name="penerbit">
    </div>
</div>

<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
    <input value="{{ $buku->tahun_terbit}}" type="text" class="form-control" name="tahun">
    </div>
</div>

<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Jumlah Halaman</label>
    <div class="col-sm-10">
    <input value="{{ $buku->jmlh_halaman}}" type="number" class="form-control" name="hal">
    </div>
</div>
<input type="submit" class="btn btn-sm btn-primary" value="Simpan">
</form>
@endsection