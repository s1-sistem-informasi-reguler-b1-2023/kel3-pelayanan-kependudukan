@extends('adminlte::page')

@section('title', 'Daftar Approval Pengajuan')

@section('content_header')
    <h1 class="m-0">Daftar Approval Pengajuan</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Daftar Approval Pengajuan</span>
                <Span>
            </div>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            {{ $dataTable->table() }}
        </div>
    </div>
@stop

@section('adminlte_js')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@stop
