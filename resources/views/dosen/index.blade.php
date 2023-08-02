@extends('layout1.main2')
@section('username','Feny Anggela')
@section('content')

<h4><b>Data Matakuliah</b></h4>
<br>
<a href="{{ route('tambah_dosen') }}" class="btn btn-primary btn-xs mb-2">Tambah Data</span></a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>NIP</td>
    <td><b>Nama Dosen</td>
    <td><b>Telpon</td>
    <td><b>Alamat</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($dosen as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->nip_dosen }}</td>
    <td>{{ $rows->nama_dosen }}</td>
    <td>{{ $rows->tlp }}</td>
    <td>{{ $rows->alamat }}</td>
    <td>
        <a href="{{ route('edit_dosen',$rows->id) }}"><span class="badge badge-warning">Edit</span></a>
        <a href="{{ route('delete_dosen',$rows->id) }}"><span class="right badge badge-danger">Del</span></a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection