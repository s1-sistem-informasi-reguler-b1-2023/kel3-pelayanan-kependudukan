@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
<h1 class="m-0">Daftar Penduduk</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">Daftar Penduduk</div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">NIK</th>
                    <th scope="col">No KK</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resident as $item)
                <tr>
                    <td>{{$item->nama_lengkap}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->no_kk}}</td>
                    <td>{{$item->jenis_kelamin}}</td>
                    <td>{{$item->tempat_lahir}}</td>
                    <td>{{$item->tanggal_lahir}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('residents.show', $item->id) }}" class="btn btn-success btn-sm mr-1"><i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ route('residents.edit', $item->id) }}" class="btn btn-warning btn-sm mr-1"><i
                                    class="fas fa-pen"></i></a>
                            <form action="{{ route('residents.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this penduduk?')"><i
                                        class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop