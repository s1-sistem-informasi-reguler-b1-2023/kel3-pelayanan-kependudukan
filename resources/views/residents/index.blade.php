@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1 class="m-0">Daftar Penduduk</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">Manage Daftar Penduduk</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
@stop

@section('adminlte_js')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@stop
