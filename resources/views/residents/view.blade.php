@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1 class="m-0">Profile</h1>
@stop

@section('content')
{{$resident->nama_lengkap}}
{{$resident->nik}}
@stop
