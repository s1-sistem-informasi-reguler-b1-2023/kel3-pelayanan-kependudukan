@extends('adminlte::page')

@section('title', 'Pengumuman')

@section('content_header')
    <h1 class="m-0">Ubah Pengumuman</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">Ubah Pengumuman</div>
        <div class="card-body">
            <form method="post" action="{{ route('news.update', $news->id) }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">

                        {{-- Judul --}}
                        <div class="mb-1">
                            <label for="nama-dokumen" class="form-label">Judul</label>
                            <div class="form-group">
                                <input type="text" name="judul" placeholder="Judul" class="form-control"
                                    value="{{ $news->judul }}" />
                                @if ($errors->has('judul'))
                                    <div class="invalid-feedback d-block">{{ $errors->first('judul') }}</div>
                                @endif
                            </div>
                        </div>
                        {{-- End Judul --}}
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>

        </div>
    </div>
@stop
