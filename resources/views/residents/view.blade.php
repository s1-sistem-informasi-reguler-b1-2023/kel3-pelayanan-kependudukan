@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1 class="m-0">Profile</h1>
@stop

@section('content')
<div class="card" style="width: 18rem;">
    <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fmedia.licdn.com%2Fdms%2Fimage%2FD4E03AQHtMg5Xa8bsdg%2Fprofile-displayphoto-shrink_200_200%2F0%2F1643818193519%3Fe%3D2147483647%26v%3Dbeta%26t%3DBdvBXgTAylnURtRPnXcq0Hf5mC0VloJ4pIvYtH9tCQM&tbnid=kEqFqN4f6h0g4M&vet=12ahUKEwjG4fKbp5iDAxVdvWMGHSEBDh0QMygCegQIARBP..i&imgrefurl=https%3A%2F%2Fwww.linkedin.com%2Fpub%2Fdir%2FZachariah%2FSwift&docid=hud_D7KdYJsq7M&w=200&h=200&q=zachariah%20swift&ved=2ahUKEwjG4fKbp5iDAxVdvWMGHSEBDh0QMygCegQIARBP" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">Nama Lengkap</h5>
        <p class="card-text">{{$resident->nama_lengkap}}</p>
    </div>
</div>
{{$resident->nama_lengkap}}
{{$resident->nik}}
{{$resident->no_kk}}
{{$resident->jenis_kelamin}}
{{$resident->tempat_lahir}}
{{$resident->tanggal_lahir}}
{{$resident->agama}}
{{$resident->pekerjaaan}}
{{$resident->status_perkawinan}}
{{$resident->alamat}}
{{$resident->rt}}
{{$resident->rw}}
{{$resident->desa_id}}
{{$resident->kecamatan_id}}
{{$resident->kabupaten_id}}
{{$resident->provinsi_id}}
{{$resident->negara}}
{{$resident->alamat_asal}}
{{$resident->rt_asal}}
{{$resident->rw_asal}}
{{$resident->desa_asal}}
{{$resident->kecamatan_asal}}
{{$resident->kabupaten_asal}}
{{$resident->provinsi_asal}}
{{$resident->negara_asal}}
@stop