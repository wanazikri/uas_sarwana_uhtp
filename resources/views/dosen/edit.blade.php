@extends('layout1.main2')
@section('username','Feny Anggela')
@section('content')


<h4><b>Edit Data Peminjam</b></h1>
<br>
<form action="{{ route('update_dosen') }}" method="POST">

@csrf
@method('PATCH')
<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">NIP Dosen</label>
    <div class="col-sm-10">
    <input value="{{ $dosen->id }}" type="hidden" name="id">
    <input value="{{ $dosen->nip_dosen }}" type="text" class="form-control" id="nim_peminjam" name="nip">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Dosen</label>
    <div class="col-sm-10">
    <input value="{{ $dosen->nama_dosen }}" type="text" class="form-control" id="nama_peminjam" name="nama">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Dosen</label>
    <div class="col-sm-10">
    <input value="{{ $dosen->tlp }}" type="text" class="form-control" id="nama_peminjam" name="tlp">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Bobot</label>
    <div class="col-sm-10">
    <input value="{{ $dosen->alamat }}" type="text" class="form-control" id="alamat" name="alamat">
    </div>
</div>
<input type="submit" class="btn btn-sm btn-primary" value="Simpan">
</form>
@endsection