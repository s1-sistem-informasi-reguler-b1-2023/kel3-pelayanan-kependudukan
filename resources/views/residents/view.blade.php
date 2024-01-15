@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1 class="m-0">Profile</h1>
@stop

@section('content')
<dl class="row">
  <dt class="col-sm-3">Nama Lengkap</dt>
  <dd class="col-sm-9">: {{$resident->nama_lengkap}}</dd>

  <dt class="col-sm-3">NIK</dt>
  <dd class="col-sm-9">: {{$resident->nik}}</dd>

  <dt class="col-sm-3">No KK</dt>
  <dd class="col-sm-9">: {{$resident->no_kk}}</dd>

  <dt class="col-sm-3 text-truncate">Jenis Kelamin</dt>
  <dd class="col-sm-9">: {{$resident->jenis_kelamin}}</dd>

  <dt class="col-sm-3">Tempat Lahir</dt>
  <dd class="col-sm-9">: {{$resident->tempat_lahir}}</dd>

  <dt class="col-sm-3">Tanggal Lahir</dt>
  <dd class="col-sm-9">: {{\App\Helpers\DateHelper::formatAsIndonesianDate($resident->tanggal_lahir)}}</dd>

  <dt class="col-sm-3">Agama</dt>
  <dd class="col-sm-9">: {{$resident->agama}}</dd>

  <dt class="col-sm-3">Pekerjaan</dt>
  <dd class="col-sm-9">: {{$resident->pekerjaan}}</dd>

  <dt class="col-sm-3">Status Perkawinan</dt>
  <dd class="col-sm-9">: {{$resident->status_perkawinan}}</dd>

  <dt class="col-sm-3">Alamat</dt>
  <dd class="col-sm-9">: {{$resident->alamat}}</dd>

  <dt class="col-sm-3">RT</dt>
  <dd class="col-sm-9">: {{$resident->rt}}</dd>

  <dt class="col-sm-3">RW</dt>
  <dd class="col-sm-9">: {{$resident->rw}}</dd>
  <dt class="col-sm-3">Desa</dt>
  <dd class="col-sm-9">: {{$resident->desa->nama}}</dd>

  <dt class="col-sm-3">Kecamatan</dt>
  <dd class="col-sm-9">: {{$resident->kecamatan->nama}}</dd>

  <dt class="col-sm-3">Kabupaten</dt>
  <dd class="col-sm-9">: {{$resident->kabupaten->nama}}</dd>

  <dt class="col-sm-3">Provinsi</dt>
  <dd class="col-sm-9">: {{$resident->provinsi->nama}}</dd>

  <dt class="col-sm-3">Negara</dt>
  <dd class="col-sm-9">: {{$resident->negara}}</dd>

  <dt class="col-sm-3">Alamat Asal</dt>
  <dd class="col-sm-9">: {{$resident->alamat_asal}}</dd>

  <dt class="col-sm-3">RT Asal</dt>
  <dd class="col-sm-9">: {{$resident->rt_asal}}</dd>

  <dt class="col-sm-3">RW Asal</dt>
  <dd class="col-sm-9">: {{$resident->rw_asal}}</dd>

  <dt class="col-sm-3">Desa Asal</dt>
  <dd class="col-sm-9">: {{$resident->desa_asal}}</dd>

  <dt class="col-sm-3">Kecamatan Asal</dt>
  <dd class="col-sm-9">: {{$resident->kecamatan_asal}}</dd>

  <dt class="col-sm-3">Kabupaten Asal</dt>
  <dd class="col-sm-9">: {{$resident->kabupaten_asal}}</dd>

  <dt class="col-sm-3">Provinsi Asal</dt>
  <dd class="col-sm-9">: {{$resident->provinsi_asal}}</dd>

  <dt class="col-sm-3">Negara Asal</dt>
  <dd class="col-sm-9">: {{$resident->negara_asal}}</dd>
</dl>
@stop