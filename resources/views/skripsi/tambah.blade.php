@extends('layout1.main2')
@section('username','Sarwana')
@section('content')


<h4><b>Tambah Daftar Skripsi</b></h4>
<br>
<form action="{{ route('simpan_skripsi') }}" method="POST">
@csrf
@method('PUT')
<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="nim">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">NAMA</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="nama">
    </div>
</div>

<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="kelas">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">judul</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="judul">
    </div>
</div>

<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="tahun">
    </div>
</div>
<input type="submit" class="btn btn-xm btn-primary" value="Simpan">
</form> 

@endsection