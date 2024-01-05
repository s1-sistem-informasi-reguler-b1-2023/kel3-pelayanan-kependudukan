@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1 class="m-0">Profile</h1>
@stop

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Nama Lengkap</p>
            <p class=>{{$resident->nama_lengkap}}
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">NIK</p>
            <p class=>{{$resident->nik}}
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">No KK</p>
            <p class=>{{$resident->no_kk}}</p>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Jenis Kelamin </p>
            <p class=>{{$resident->jenis_kelamin}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Tempat Lahir</p>
            <p class=>{{$resident->tempat_lahir}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Tanggal Lahir</p>
            <p class=>{{$resident->tanggal_lahir}}</p>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Agama</p>
            <p class=>{{$resident->agama}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Pekerjaan</p>
            <p class=>{{$resident->pekerjaan}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Status Perkawinan</p>
            <p class=>{{$resident->status_perkawinan}}</p>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Alamat</p>
            <p class=>{{$resident->alamat}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">RT</p>
            <p class=>{{$resident->rt}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">RW</p>
            <p class=>{{$resident->rw}}</p>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Desa</p>
            <p class=>{{$resident->desa->nama}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Kecamatan</p>
            <p class=>{{$resident->kecamatan->nama}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Kabupaten</p>
            <p class=>{{$resident->kabupaten->nama}}</p>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Provinsi</p>
            <p class=>{{$resident->provinsi->nama}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Negara</p>
            <p class=>{{$resident->negara}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Alamat asal</p>
            <p class=>{{$resident->alamat_asal}}</p>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">RT asal</p>
            <p class=>{{$resident->rt_asal}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">RW asal</p>
            <p class=>{{$resident->rw_asal}}</p>
        </div>
        <div class="col-6 col-md-4">
            <p class="text-white bg-dark">Desa asal</p>
            <p class=>{{$resident->desa_asal}}</p>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <p class="text-white bg-dark">Kecamatan asal</p>
            <p class=>{{$resident->kecamatan_asal}}</p>
        </div>
        <div class="col">
            <p class="text-white bg-dark">Kabupaten asal</p>
            <p class=>{{$resident->kabupaten_asal}}</p>
        </div>
        <div class="col">
            <p class="text-white bg-dark">Provinsi asal</p>
            <p class=>{{$resident->provinsi_asal}}</p>
        </div>
        <div class="col">
            <p class="text-white bg-dark">Negara asal</h3><br>
            <p class=>{{$resident->negara_asal}}</p>
        </div>
    </div>
</div>
@stop