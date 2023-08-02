@extends('layout1.main2')
@section('username','Sarwana')
@section('content')

<h4><b>Daftar Judul Skripsi</b></h4>
<br>
<a href="{{ route('tambah_skripsi') }}" class="btn btn-primary btn-xs mb-2">Tambah Data</span></a>
<table class="table table-striped table-bordered" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>NIM Mahasiswa</td>
    <td><b>Nama Mahasiswa</td>
    <td><b>Kelas</td>
    <td><b>Judul Skripsi</td>
    <td><b>Tahun</td>
    <td><b>Aksi</td>
 </tr>   
@foreach ($skripsi as $rows)

<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $rows->nim_mhs }}</td>
    <td>{{ $rows->nama_mhs }}</td>
    <td>{{ $rows->kelas }}</td>
    <td>{{ $rows->judul }}</td>
    <td>{{ $rows->tahun }}</td>

    
    <td>
        <a href="{{ route('edit_skripsi',$rows->id) }}"><span class="badge badge-warning">Edit</span></a>
        <a href="{{ route('delete_skripsi',$rows->id) }}"><span class="right badge badge-danger">Del</span></a>
    </td>
</tr>
@endforeach

</table>
@endsection