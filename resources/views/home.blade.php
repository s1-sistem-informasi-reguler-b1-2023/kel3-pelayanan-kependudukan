@extends('adminlte::page')

@section('title', 'Beranda')

@section('content_header')
    <h1 class="m-0">Beranda</h1>
@stop

@section('content')
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(0%) sepia(0%) saturate(0%) hue-rotate(189deg) brightness(0%) contrast(100%);
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Pengumuman') }}</div>
                <div class="card-body">
                    @if ($newsArray)
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner text-center">
                                @foreach ($newsArray as $k => $news)
                                    <div class="carousel-item {{ $k == 0 ? 'active' : '' }}">
                                        <div style="min-height: 100px" class="bg-muted">
                                            <h3 class="text-center">{{ $news->judul }}</h3>
                                            <p class="text-center" style="margin: 10px 150px">
                                                {{ Str::limit($news->konten, 1000) }}</p>
                                            <div class="text-center">
                                                <a href="{{ route('news.show', $news->id) }}"
                                                    class="btn btn-success btn-sm">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button style="width: 150px" class="carousel-control-prev" type="button"
                                data-target="#carouselExampleIndicators" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button style="width: 150px" class="carousel-control-next" type="button"
                                data-target="#carouselExampleIndicators" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                    @else
                        <div class="text-center text-muted">Belum tersedia</div>
                    @endif

                </div>
            </div>
        </div>

    </div>
@stop
