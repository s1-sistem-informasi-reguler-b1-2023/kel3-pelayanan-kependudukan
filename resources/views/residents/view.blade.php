@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1 class="m-0">Profile</h1>
@stop

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4" >
            <p class=>Nama Lengkap </p>
            <p class="fw-bold">{{$resident->nama_lengkap}}
        </div>
        <div class="col-6 col-md-4" >
            <p class=>NIK</p>
            <p class="fw-bold">{{$resident->nik}}
        </div>
        <div class="col-6 col-md-4" >
            <p class=>No KK</p>
            <p class="fw-bold">{{$resident->no_kk}}</p>
        </div>
    </div>
</div><br>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4" >
            <p class=>Jenis Kelamin </p>
            <p class="fw-bold">{{$resident->jenis_kelamin}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Tempat Lahir</p>
            <p class="fw-bold">{{$resident->tempat_lahir}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Tanggal Lahir</p>
            <p class="fw-bold">{{$resident->tanggal_lahir}}</p>
        </div>
    </div>
</div><br>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4" >
            <p class=>Agama </p>
            <p class="fw-bold">{{$resident->agama}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Pekerjaan</p>
            <p class="fw-bold">{{$resident->pekerjaan}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Tanggal Lahir</p>
            <p class="fw-bold">{{$resident->status_perkawinan}}</p>
        </div>
    </div>
</div><br>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4" >
            <p class=>Alamat</p>
            <p class="fw-bold">{{$resident->alamat}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>RT</p>
            <p class="fw-bold">{{$resident->rt}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>RW</p>
            <p class="fw-bold">{{$resident->rw}}</p>
        </div>
    </div>
</div><br>
<div class="container text-center">
    <div class="row">
        <div class="col-6 col-md-4" >
            <p class=>Desa</p>
            <p class="fw-bold">{{$resident->desa->nama}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Kecamatan</p>
            <p class="fw-bold">{{$resident->kecamatan->nama}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Kabupaten</p>
            <p class="fw-bold">{{$resident->kabupaten->nama}}</p>
        </div>
    </div>
</div><br>
<div class="container text-center">
    <div class="row" style="font-weight:bold">
        <div class="col-6 col-md-4" >
            <p class=>Provinsi</p>
            <p class="card-text">{{$resident->provinsi->nama}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Negara</p>
            <p class="card-text">{{$resident->negara}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Alamat asal</p>
            <p class="card-text">{{$resident->alamat_asal}}</p>
        </div>
    </div>
</div><br>
<div class="container text-center">
    <div class="row" style="font-weight:bold">
        <div class="col-6 col-md-4" >
            <p class=>RT asal</p>
            <p class="card-text">{{$resident->rt_asal}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>RW awal</p>
            <p class="card-text">{{$resident->rw_asal}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Desa asal</p>
            <p class="card-text">{{$resident->desa_asal}}</p>
        </div>
    </div>
</div><br>
<div class="container text-center">
    <div class="row" style="font-weight:bold">
        <div class="col-6 col-md-4" >
            <p class=>Kecamatan asal</p>
            <p class="card-text">{{$resident->kecamatan_asal}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Kabupaten awal</p>
            <p class="card-text">{{$resident->kabupaten_asal}}</p>
        </div>
        <div class="col-6 col-md-4" >
            <p class=>Provinsi asal</p>
            <p class="card-text">{{$resident->provinsi_asal}}</p>
        </div>
    </div>
</div><br>
<div class="card-body">
    <h3 class="card-title">Negara asal</h3><br>
    <p class="card-text">{{$resident->negara_asal}}</p>
</div>
</div>
@stop