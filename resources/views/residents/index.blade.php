@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1 class="m-0">Daftar Profile</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">Daftar Profile</div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NIK</th>
                    <th scope="col">No KK</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resident as $item)
                <tr>
                    <td>{{$item->nama_lengkap}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->no_kk}}</td>
                    <td>{{$item->jenis_kelamin}}</td>
                    <td>{{$item->tempat_lahir}}</td>
                    <td>{{$item->tanggal_lahir}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop