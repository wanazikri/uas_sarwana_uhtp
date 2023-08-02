@extends('layout1.main2')
@section('username','Sarwana')
@section('content')


<h4><b>Edit Daftar Judul Skripsi</b></h1>
<br>
<form action="{{ route('update_skripsi') }}" method="POST">
@csrf
@method('PATCH')
<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
    <input value="{{ $skripsi->id }}" type="hidden" name="id">
    <input value="{{ $skripsi->nim_mhs }}" type="text" class="form-control" name="nim">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">NAMA</label>
    <div class="col-sm-10">
    <input value="{{ $skripsi->nama_mhs }}" type="text" class="form-control" name="nama">
    </div>
</div>

<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
    <input value="{{ $skripsi->kelas }}" type="text" class="form-control" name="kelas">
    
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">judul</label>
    <div class="col-sm-10">
    <input value="{{ $skripsi->judul }}" type="text" class="form-control" name="judul">
    </div>
</div>

<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
    <input value="{{ $skripsi->tahun }}" type="text" class="form-control" name="tahun">
    </div>
</div>
<input type="submit" class="btn btn-sm btn-primary" value="Simpan">
</form>
@endsection