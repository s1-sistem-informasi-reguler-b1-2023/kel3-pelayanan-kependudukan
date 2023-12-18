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
        <h3 class="card-title">NIK</h3><br>
        <p class="card-text">{{$resident->nik}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">No KK</h3><br>
        <p class="card-text">{{$resident->no_kk}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Jenis Kelamin</h3><br>
        <p class="card-text">{{$resident->jenis_kelamin}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Tempat Lahir</h3><br>
        <p class="card-text">{{$resident->tempat_lahir}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Tanggal Lahir</h3><br>
        <p class="card-text">{{$resident->tanggal_lahir}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Agama</h3><br>
        <p class="card-text">{{$resident->agama}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Pekerjaan</h3><br>
        <p class="card-text">{{$resident->pekerjaan}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Status Perkawinan</h3><br>
        <p class="card-text">{{$resident->status_perkawinan}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Alamat</h3><br>
        <p class="card-text">{{$resident->alamat}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">RT</h3><br>
        <p class="card-text">{{$resident->rt}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">RW</h3><br>
        <p class="card-text">{{$resident->rw}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Desa</h3><br>
        <p class="card-text">{{$resident->desa_id}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Kecamatan</h3><br>
        <p class="card-text">{{$resident->kecamatan_id}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Kabupaten</h3><br>
        <p class="card-text">{{$resident->kabupaten_id}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Provinsi</h3><br>
        <p class="card-text">{{$resident->provinsi_id}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Negara</h3><br>
        <p class="card-text">{{$resident->negara}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Alamat asal</h3><br>
        <p class="card-text">{{$resident->alamat_asal}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">RT asal</h3><br>
        <p class="card-text">{{$resident->rt_asal}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">RW asal</h3><br>
        <p class="card-text">{{$resident->rw_asal}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Desa asal</h3><br>
        <p class="card-text">{{$resident->desa_asal}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Kecamatan asal</h3><br>
        <p class="card-text">{{$resident->kecamatan_asal}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Kabupaten asal</h3><br>
        <p class="card-text">{{$resident->kabupaten_asal}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Provinsi asal</h3><br>
        <p class="card-text">{{$resident->provinsi_asal}}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">Negara asal</h3><br>
        <p class="card-text">{{$resident->negara_asal}}</p>
    </div>
</div>
@stop