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
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
  <style>
.carousel-control-prev-icon,
.carousel-control-next-icon {
    filter: invert(0%) sepia(0%) saturate(0%) hue-rotate(189deg) brightness(0%) contrast(100%);
}
</style>

</div>
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
