@extends('adminlte::page')

@section('title', 'Pengumuman')

@section('content_header')
    <h1 class="m-0">Detail Pengumuman</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">Detail Pengumuman</div>
        <div class="card-body">
            <div class="row">
                {{-- Judul --}}
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="judul" class="form-label">Judul</label>
                        <div class="form-group">
                            <input type="text" name="judul" placeholder="Judul" class="form-control-plaintext"
                                value="{{ $news->judul }}" readonly />
                        </div>
                    </div>
                </div>
                {{-- End Judul --}}
                {{-- Judul --}}
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="tanggal_publish" class="form-label">Tanggal Publish</label>
                        <div class="form-group">
                            <input type="text" name="tanggal_publish" placeholder="tanggal_publish"
                                class="form-control-plaintext"
                                value="{{ \App\Helpers\DateHelper::formatAsIndonesianDate($news->tanggal_publish) }}"
                                readonly />
                        </div>
                    </div>
                </div>
                {{-- End Judul --}}
                {{-- Judul --}}
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
                        <div class="form-group">
                            <input type="text" name="tanggal_berakhir" placeholder="tanggal_berakhir"
                                class="form-control-plaintext"
                                value="{{ \App\Helpers\DateHelper::formatAsIndonesianDate($news->tanggal_berakhir) }}"
                                readonly />
                        </div>
                    </div>
                </div>
                {{-- End Judul --}}
                {{-- Judul --}}
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="konten" class="form-label">Konten</label>
                        <div class="form-group">
                            <input type="text" name="konten" placeholder="konten" class="form-control-plaintext"
                                value="{{ $news->konten }}" readonly />
                        </div>
                    </div>
                </div>
                {{-- End Judul --}}

            </div>
        </div>
    </div>
@stop
