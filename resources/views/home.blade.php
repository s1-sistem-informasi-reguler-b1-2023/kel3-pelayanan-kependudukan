@extends('adminlte::page')

@section('title', 'Beranda')

@section('content_header')
<h1 class="m-0">Beranda</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">{{ __('Pengumuman') }}</div>
            <div class="card-body">
                <div class="text-center text-muted">Belum tersedia</div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Rangkuman Pengajuan Surat') }}</div>
            <div class="card-body">
                <div class="text-center text-muted">Belum tersedia</div>
            </div>
        </div>
    </div>
</div>
@stop
