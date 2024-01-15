@extends('adminlte::page')

@section('title', 'Pengumuman')

@section('content_header')
    <h1 class="m-0">Tambah Pengumuman</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">Tambah Pengumuman</div>
        <div class="card-body">
            <form method="post" action="{{ route('news.store') }}" id="news-create">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="nama-dokumen" class="form-label">Judul</label>
                            <div class="form-group">
                                <input type="text" name="judul" placeholder="Judul" class="form-control" required />
                                @if ($errors->has('judul'))
                                    <div class="invalid-feedback d-block">{{ $errors->first('judul') }}</div>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="nama-dokumen" class="form-label">Tanggal Tayang</label>
                            <div class="form-group">
                                <input type="text" name="tanggal_tayang" placeholder="Tanggal Publish"
                                    class="form-control rangedatepicker" required />
                                @if ($errors->has('tanggal_tayang'))
                                    <div class="invalid-feedback d-block">{{ $errors->first('tanggal_tayang') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-1">
                            <label for="nama-dokumen" class="form-label">Konten</label>
                            <div class="form-group">
                                <textarea name="konten" placeholder="Konten" class="form-control" required></textarea>
                                @if ($errors->has('konten'))
                                    <div class="invalid-feedback d-block">{{ $errors->first('konten') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script>
        $('#news-create').validate();
        $('.rangedatepicker').daterangepicker()
    </script>
@stop
