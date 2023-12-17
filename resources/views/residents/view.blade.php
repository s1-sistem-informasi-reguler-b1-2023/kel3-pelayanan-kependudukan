@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1 class="m-0">Profile</h1>
@stop

@section('content')
{{$resident->nama_lengkap}}
{{$resident->nik}}
{{$resident->no_kk}}
{{$resident->jenis_kelamin}}
{{$resident->tempat_lahir}}
{{$resident->tanggal_lahir}}
{{$resident->agama}}
{{$resident->pekerjaaan}}
{{$resident->status-perkawinan}}
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
