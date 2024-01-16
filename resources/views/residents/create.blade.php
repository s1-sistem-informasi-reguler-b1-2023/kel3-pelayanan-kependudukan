@extends('adminlte::page')

@section('title', 'Tambah Penduduk')

@section('content_header')
    <h1 class="m-0">Tambah Penduduk</h1>
@stop
@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger mb-3">{{ session()->get('error') }}</div>
    @endif
    <form method="post" action="{{ route('residents.store') }}" id="penduduk-form" novalidate>
        @csrf
        <div class="row align-items-stretch">
            <div class="col-md-4">
                <div class="d-flex align-items-stretch h-100">
                    <div class="card">
                        <div class="card-header">Identitas Pribadi</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="no_kk" class="col-form-label m-0">No. KK</label>
                                    <div class="form-group">
                                        <input required type="text" name="no_kk" placeholder="No. KK"
                                            class="form-control" value="{{ old('no_kk') }}" />
                                        @if ($errors->has('no_kk'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('no_kk') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="nik" class="col-form-label m-0">NIK</label>
                                    <div class="form-group">
                                        <input required type="text" name="nik" placeholder="NIK" class="form-control"
                                            value="{{ old('nik') }}" />
                                        @if ($errors->has('nik'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('nik') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="nama_lengkap" class="col-form-label m-0">Nama Lengkap</label>
                                    <div class="form-group">
                                        <input required type="text" name="nama_lengkap" placeholder="Nama Lengkap"
                                            class="form-control" value="{{ old('nama_lengkap') }}" />
                                        @if ($errors->has('nama_lengkap'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('nama_lengkap') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="jenis_kelamin" class="col-form-label m-0">Jenis Kelamin</label>
                                    <div class="form-group">
                                        <select required type="text" name="jenis_kelamin" placeholder="Jenis Kelamin"
                                            class="form-control">
                                            <option value="LAKI_LAKI"
                                                {{ old('jenis_kelamin') == 'LAKI_LAKI' ? 'selected' : '' }}>Laki-Laki
                                            </option>
                                            <option value="PEREMPUAN"
                                                {{ old('jenis_kelamin') == 'PEREMPUAN' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>
                                        @if ($errors->has('jenis_kelamin'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('jenis_kelamin') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="tempat_lahir" class="col-form-label m-0">Tempat Lahir</label>
                                    <div class="form-group">
                                        <input required type="text" name="tempat_lahir" placeholder="Tempat Lahir"
                                            class="form-control" value="{{ old('tempat_lahir') }}" />
                                        @if ($errors->has('tempat_lahir'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('tempat_lahir') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="tanggal_lahir" class="col-form-label m-0">Tanggal Lahir</label>
                                    <div class="form-group">
                                        <input required type="text" name="tanggal_lahir" placeholder="Tanggal Lahir"
                                            class="form-control datepicker-input" value="{{ old('tanggal_lahir') }}" />
                                        @if ($errors->has('tanggal_lahir'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('tanggal_lahir') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="d-flex align-items-stretch h-100">
                    <div class="card">
                        <div class="card-header">Data Tambahan</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="agama" class="col-form-label m-0">Agama</label>
                                    <div class="form-group">
                                        <input required type="text" name="agama" placeholder="Agama"
                                            class="form-control" value="{{ old('agama') }}" />
                                        @if ($errors->has('agama'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('agama') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="pekerjaan" class="col-form-label m-0">Pekerjaan</label>
                                    <div class="form-group">
                                        <input required type="text" name="pekerjaan" placeholder="Pekerjaan"
                                            class="form-control" value="{{ old('tempat_lahir') }}" />
                                        @if ($errors->has('pekerjaan'))
                                            <div class="invalid-feedback d-block">{{ $errors->first('pekerjaan') }}

                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="status_perkawinan" class="col-form-label m-0">Status Pernikahan</label>
                                    <div class="form-group">
                                        <select required type="text" name="status_perkawinan"
                                            placeholder="Status Pernikahan" class="form-control">
                                            <option value="MENIKAH"
                                                {{ old('status_perkawinan') == 'MENIKAH' ? 'selected' : '' }}>
                                                Menikah</option>
                                            <option value="BELUM_MENIKAH"
                                                {{ old('status_perkawinan') == 'BELUM_MENIKAH' ? 'selected' : '' }}>Belum
                                                Menikah</option>
                                        </select>
                                        @if ($errors->has('status_perkawinan'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('status_perkawinan') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="alamat" class="col-form-label m-0">Alamat</label>
                                    <div class="form-group">
                                        <select name="territory" id="territory-select2"
                                            class="form-control select2-single w-100" required>
                                        </select>
                                        @if ($errors->has('territory'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('territory') }}</div>
                                        @endif
                                    </div>

                                    <label for="alamat" class="col-form-label m-0">Alamat Lengkap</label>
                                    <div class="form-group">
                                        <textarea required type="text" name="alamat" placeholder="Alamat" class="form-control" rows="5">{{ old('alamat') }}</textarea>
                                        @if ($errors->has('alamat'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('alamat') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="d-flex align-items-stretch h-100">
                    <div class="card">
                        <div class="card-header">Alamat Asal</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="alamat_asal" class="col-form-label m-0">Alamat</label>
                                    <div class="form-group">
                                        <textarea name="alamat_asal" placeholder="Alamat" class="form-control">{{ old('alamat_asal') }}</textarea>
                                        @if ($errors->has('alamat_asal'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('alamat_asal') }}

                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="rt_asal" class="col-form-label m-0">RT</label>
                                    <div class="form-group">
                                        <input type="text" name="rt_asal" placeholder="RT" class="form-control"
                                            value="{{ old('rt_asal') }}" />
                                        @if ($errors->has('rt_asal'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('rt_asal') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="rw_asal" class="col-form-label m-0">RW</label>
                                    <div class="form-group">
                                        <input type="text" name="rw_asal" placeholder="RW" class="form-control"
                                            value="{{ old('rw_asal') }}" />
                                        @if ($errors->has('rw_asal'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('rw_asal') }}

                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="desa_asal" class="col-form-label m-0">Desa</label>
                                    <div class="form-group">
                                        <input type="text" name="desa_asal" placeholder="Desa" class="form-control"
                                            value="{{ old('desa_asal') }}" />
                                        @if ($errors->has('desa_asal'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('desa_asal') }}

                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="kecamatan_asal" class="col-form-label m-0">Kecamatan</label>
                                    <div class="form-group">
                                        <input type="text" name="kecamatan_asal" placeholder="Kecamatan"
                                            class="form-control" value="{{ old('kecamatan_asal') }}" />
                                        @if ($errors->has('kecamatan_asal'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('kecamatan_asal') }}

                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="kabupaten_asal" class="col-form-label m-0">Kabupaten</label>
                                    <div class="form-group">
                                        <input type="text" name="kabupaten_asal" placeholder="Kabupaten"
                                            class="form-control" value="{{ old('kabupaten_asal') }}" />
                                        @if ($errors->has('kabupaten_asal'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('kabupaten_asal') }}

                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="provinsi_asal" class="col-form-label m-0">Provinsi</label>
                                    <div class="form-group">
                                        <input type="text" name="provinsi_asal" placeholder="Provinsi"
                                            class="form-control" value="{{ old('provinsi_asal') }}" />
                                        @if ($errors->has('provinsi_asal'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('provinsi_asal') }}

                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="negara_asal" class="col-form-label m-0">Negara</label>
                                    <div class="form-group">
                                        <input type="text" name="negara_asal" placeholder="Negara"
                                            class="form-control" value="{{ old('negara_asal') }}" />
                                        @if ($errors->has('negara_asal'))
                                            <div class="invalid-feedback d-block">
                                                {{ $errors->first('negara_asal') }}

                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <input type="hidden" id="rt" name="rt" placeholder="RT" class="form-control ignore" />
            <input type="hidden" id="rw" name="rw" placeholder="RW" class="form-control ignore" />
            <input type="hidden" id="desa_id" name="desa_id" placeholder="Desa" class="form-control ignore" />
            <input type="hidden" id="kecamatan_id" name="kecamatan_id" placeholder="Kecamatan"
                class="form-control ignore" />
            <input type="hidden" id="kabupaten_id" name="kabupaten_id" placeholder="Kabupaten"
                class="form-control ignore" />
            <input type="hidden" id="provinsi_id" name="provinsi_id" placeholder="Provinsi"
                class="form-control ignore" />
            <input type="hidden" id="negara" name="negara" placeholder="Negara" class="form-control ignore" />

            <div class="my-3 w-100 text-center">
                <button class="btn btn-lg btn-primary w-25" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@stop

@section('adminlte_js')
    <script>
        $('.datepicker-input').datepicker()
        $('#territory-select2').select2({
            theme: 'bootstrap4',
            templateResult: formatState,
            placeholder: "Pilih alamat",
            minimumInputLength: 0,
            ajax: {
                url: `{{ route('territory-availables.select2') }}`,
                dataType: 'json',
                data: function(params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        })

        $('#territory-select2').on('select2:select', function(e) {
            if (e.params.data) {
                console.log(e.params.data)
                $('#rt').val(e.params.data.rt);
                $('#rw').val(e.params.data.rw);
                $('#desa_id').val(e.params.data.desa_id);
                $('#kecamatan_id').val(e.params.data.kecamatan_id);
                $('#kabupaten_id').val(e.params.data.kabupaten_id);
                $('#provinsi_id').val(e.params.data.provinsi_id);
                $('#negara').val(e.params.data.negara);
            } else {
                $('#rt').val('');
                $('#rw').val('');
                $('#desa_id').val('');
                $('#kecamatan_id').val('');
                $('#kabupaten_id').val('');
                $('#provinsi_id').val('');
            }
        })

        function formatState(state) {
            var $state = $(
                `<div class="row">
                    <div class="col-md-12">RT. ${state.rt} RW. ${state.rw} Ds. ${state.desa} Kec. ${state.kecamatan}</div>
                    <div class="col-md-12">Kab. ${state.kabupaten}, ${state.provinsi}, ${state.negara}</div>
                </div>`
            );
            return $state;
        };
    </script>
@stop

@section('adminlte_js')
    <script>
        $('#penduduk-form').validate();
        // $('.rangedatepicker').daterangepicker()
    </script>
@stop
