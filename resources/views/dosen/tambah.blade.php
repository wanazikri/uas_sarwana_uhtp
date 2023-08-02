@extends('layout1.main2')
@section('username','Feny Anggela')
@section('content')


<h4><b>Tambah Peminjam</b></h4>
<br>
<form action="{{ route('simpan_dosen') }}" method="POST">
@csrf
@method('PUT')
<div class="mb-3 row">
    <label for="nim_peminjam" class="col-sm-2 col-form-label">NIP Dosen</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="nip">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Dosen</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="nama">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_peminjam" class="col-sm-2 col-form-label">No Telpon</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="tlp">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="alamat">
    </div>
</div>
<input type="submit" class="btn btn-xm btn-primary" value="Simpan">
</form> 

@endsection