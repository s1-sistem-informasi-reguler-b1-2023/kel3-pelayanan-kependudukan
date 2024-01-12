@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1 class="m-0">Update Profile</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">Update Profile</div>
        <div class="card-body">
            <form method="post" action="{{ route('residents.update', $resident->id) }}">
                @csrf
                <div class="row">
                    {{-- Nik --}}
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="nama-dokumen" class="form-label">NIK</label>
                            <div class="form-group">
                                <input type="text" name="nik" placeholder="nik" class="form-control"
                                    value="{{ $resident->nik }}" />
                                @if ($errors->has('nik'))
                                    <div class="invalid-feedback d-block">{{ $errors->first('nik') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- End Nik --}}

                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@stop
