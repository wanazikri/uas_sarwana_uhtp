@extends('layout1.main2')
@section('username','Desi Ratna Sari')
@section('content')

<h4><b>Data Buku</b></h4>
<br>
<a href="{{ route('tambah_buku') }}" class="btn btn-primary btn-xs mb-2">Tambah Data</span></a>
<table class="table table-striped table-bordered" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>Kode Buku</td>
    <td><b>Judul Buku</td>
    <td><b>Penulis</td>
    <td><b>Penerbit</td>
    <td><b>Tahun Terbit</td>
    <td><b>Jumlah Halaman</td>
    <td><b>Aksi</td>
 </tr>   
@foreach ($buku as $rows)

<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $rows->kode }}</td>
    <td>{{ $rows->judul_buku }}</td>
    <td>{{ $rows->penulis_buku }}</td>
    <td>{{ $rows->penerbit_buku }}</td>
    <td>{{ $rows->tahun_terbit }}</td>
    <td>{{ $rows->jmlh_halaman }}</td>
    <td>
        <a href="{{ route('edit_buku',$rows->id) }}"><span class="badge badge-warning">Edit</span></a>
        <a href="{{ route('delete_buku',$rows->id) }}"><span class="right badge badge-danger">Del</span></a>
    </td>
</tr>
@endforeach

</table>
@endsection