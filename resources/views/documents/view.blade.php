@extends('adminlte::page')

@section('title', 'Approval Dokumen')

@section('content_header')
    <h1 class="m-0">Detail Approval Dokumen</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">Detail Approval Dokumen</div>
        <div class="card-body">
            <div class="row">
                {{-- Judul --}}
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="judul" class="form-label">Judul</label>
                        <div class="form-group">
                            <input type="text" name="judul" placeholder="Judul" class="form-control-plaintext"
                                value="{{ $news->judul }}" readonly />
                        </div>
                    </div>
                </div>
                {{-- End Judul --}}
            </div>
        </div>
    </div>
@stop
