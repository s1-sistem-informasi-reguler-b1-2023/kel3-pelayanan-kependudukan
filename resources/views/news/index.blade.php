@extends('adminlte::page')

@section('title', 'News')

@section('content_header')
    <h1 class="m-0">Daftar Pengumuman</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Daftar Pengajuan Dokumen</span>
                <a href="{{ route('news.create') }}" class="btn btn-primary">Daftar Pengumuman</a>
            </div>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <td>No.</td>
                        <td>Judul</td>
                        <td>Konten</td>
                        <td>Tanggal Publish</td>
                        <td>Tanggal Berakhir</td>
                        <td>#</td>
                    </tr>
                    @foreach ($newsArray as $key => $news)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $news->judul }}</td>
                            <td>{{ $news->konten }}</td>
                            <td>{{ \App\Helpers\DateHelper::formatAsIndonesianDate($news->tanggal_publish) }}
                            </td>
                            <td>{{ \App\Helpers\DateHelper::formatAsIndonesianDate($news->tanggal_berakhir) }}
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('news.show', $news->id) }}" class="btn btn-success btn-sm mr-1"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning btn-sm mr-1"><i
                                            class="fas fa-pen"></i></a>
                                    <form action="{{ route('news.destroy', $news->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this news?')"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop
