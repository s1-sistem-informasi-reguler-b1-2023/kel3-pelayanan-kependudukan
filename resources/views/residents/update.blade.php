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
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Nama Lengkap</label>
                        <div class="form-group">
                            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" class="form-control" />
                            @if ($errors->has('nama_lengkap'))
                            <div class="invalid-feedback d-block">{{ $errors->first('nama_lengkap') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">NIK</label>
                        <div class="form-group">
                            <input type="text" name="nik" placeholder="nik" class="form-control" />
                            @if ($errors->has('nik'))
                            <div class="invalid-feedback d-block">{{ $errors->first('nik') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">No KK</label>
                        <div class="form-group">
                            <input type="text" name="no_kk" placeholder="No KK" class="form-control" />
                            @if ($errors->has('no_kk'))
                            <div class="invalid-feedback d-block">{{ $errors->first('no_kk') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Jenis Kelamin</label>
                        <div class="form-group">
                            <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control" />
                            @if ($errors->has('jenis_kelamin'))
                            <div class="invalid-feedback d-block">{{ $errors->first('jenis_kelamin') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Tempat Lahir</label>
                        <div class="form-group">
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" />
                            @if ($errors->has('tempat_lahir'))
                            <div class="invalid-feedback d-block">{{ $errors->first('tempat_lahir') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Tanggal Lahir</label>
                        <div class="form-group">
                            <input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" />
                            @if ($errors->has('tanggal_lahir'))
                            <div class="invalid-feedback d-block">{{ $errors->first('tanggal_lahir') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Agama</label>
                        <div class="form-group">
                            <input type="text" name="agama" placeholder="Agama" class="form-control" />
                            @if ($errors->has('agama'))
                            <div class="invalid-feedback d-block">{{ $errors->first('agama') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Pekerjaan</label>
                        <div class="form-group">
                            <input type="text" name="pekerjaan" placeholder="Pekerjaan" class="form-control" />
                            @if ($errors->has('pekerjaan'))
                            <div class="invalid-feedback d-block">{{ $errors->first('pekerjaan') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Status Perkawinan</label>
                        <div class="form-group">
                            <input type="text" name="status_perkawinan" placeholder="Status Perkawinan"
                                class="form-control" />
                            @if ($errors->has('status_perkawinan'))
                            <div class="invalid-feedback d-block">{{ $errors->first('status_perkawinan') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Alamat</label>
                        <div class="form-group">
                            <input type="text" name="alamat" placeholder="Alamat" class="form-control" />
                            @if ($errors->has('alamat'))
                            <div class="invalid-feedback d-block">{{ $errors->first('alamat') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">RT</label>
                        <div class="form-group">
                            <input type="text" name="rt" placeholder="RT" class="form-control" />
                            @if ($errors->has('rt'))
                            <div class="invalid-feedback d-block">{{ $errors->first('rt') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">RW</label>
                        <div class="form-group">
                            <input type="text" name="rw" placeholder="RW" class="form-control" />
                            @if ($errors->has('rw'))
                            <div class="invalid-feedback d-block">{{ $errors->first('rw') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Desa</label>
                        <div class="form-group">
                            <input type="text" name="desa" placeholder="Desa" class="form-control" />
                            @if ($errors->has('desa'))
                            <div class="invalid-feedback d-block">{{ $errors->first('desa') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Kecamatan</label>
                        <div class="form-group">
                            <input type="text" name="kecamatan" placeholder="Kecamatan" class="form-control" />
                            @if ($errors->has('kecamatan'))
                            <div class="invalid-feedback d-block">{{ $errors->first('kecamatan') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Kabupaten</label>
                        <div class="form-group">
                            <input type="text" name="kabupaten" placeholder="Kabupaten" class="form-control" />
                            @if ($errors->has('kabupaten'))
                            <div class="invalid-feedback d-block">{{ $errors->first('kabupaten') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Provinsi</label>
                        <div class="form-group">
                            <input type="text" name="provinsi" placeholder="Provinsi" class="form-control" />
                            @if ($errors->has('provinsi'))
                            <div class="invalid-feedback d-block">{{ $errors->first('provinsi') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Negara</label>
                        <div class="form-group">
                            <input type="text" name="negara" placeholder="Negara" class="form-control" />
                            @if ($errors->has('negara'))
                            <div class="invalid-feedback d-block">{{ $errors->first('negara') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Alamat asal</label>
                        <div class="form-group">
                            <input type="text" name="alamat_asal" placeholder="Alamat Asal" class="form-control" />
                            @if ($errors->has('alamat_asal'))
                            <div class="invalid-feedback d-block">{{ $errors->first('alamat_asal') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">RT asal</label>
                        <div class="form-group">
                            <input type="text" name="rt_asal" placeholder="RT asal" class="form-control" />
                            @if ($errors->has('rt_asal'))
                            <div class="invalid-feedback d-block">{{ $errors->first('rt_asal') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">RW asal</label>
                        <div class="form-group">
                            <input type="text" name="rw_asal" placeholder="RW asal" class="form-control" />
                            @if ($errors->has('rw_asal'))
                            <div class="invalid-feedback d-block">{{ $errors->first('rw_asal') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Desa asal</label>
                        <div class="form-group">
                            <input type="text" name="desa_asal" placeholder="Desa asal" class="form-control" />
                            @if ($errors->has('desa_asal'))
                            <div class="invalid-feedback d-block">{{ $errors->first('desa_asal') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Kecamatan asal</label>
                        <div class="form-group">
                            <input type="text" name="kecamatan_asal" placeholder="Kecamatan asal"
                                class="form-control" />
                            @if ($errors->has('kecamatan_asal'))
                            <div class="invalid-feedback d-block">{{ $errors->first('kecamatan_asal') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Kabupaten asal</label>
                        <div class="form-group">
                            <input type="text" name="kabupaten_asal" placeholder="Kabupaten asal"
                                class="form-control" />
                            @if ($errors->has('kabupaten_asal'))
                            <div class="invalid-feedback d-block">{{ $errors->first('kabupaten_asal') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Provinsi asal</label>
                        <div class="form-group">
                            <input type="text" name="provinsi_asal" placeholder="Provinsi asal" class="form-control" />
                            @if ($errors->has('provinsi_asal'))
                            <div class="invalid-feedback d-block">{{ $errors->first('provinsi_asal') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-1">
                        <label for="nama-dokumen" class="form-label">Negara asal</label>
                        <div class="form-group">
                            <input type="text" name="negara_asal" placeholder="Negara asal" class="form-control" />
                            @if ($errors->has('negara_asal'))
                            <div class="invalid-feedback d-block">{{ $errors->first('negara_asal') }}</div>
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