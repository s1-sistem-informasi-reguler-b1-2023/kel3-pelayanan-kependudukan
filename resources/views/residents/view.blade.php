@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1 class="m-0">Profile</h1>
@stop

@section('content')
<div class="card" style="width: 18rem;">
    <img src="https://media.licdn.com/dms/image/D4E03AQHtMg5Xa8bsdg/profile-displayphoto-shrink_200_200/0/1643818193519?e=2147483647&v=beta&t=BdvBXgTAylnURtRPnXcq0Hf5mC0VloJ4pIvYtH9tCQM" class="card-img-top">
    <div class="card-body">
        <h3 class="card-title">Nama Lengkap</h3><br>
        <p class="card-text">{{$resident->nama_lengkap}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Nama Lengkap</h3><br>
        <p class="card-text">{{$resident->nik}}</p>
    </div>
</div>
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