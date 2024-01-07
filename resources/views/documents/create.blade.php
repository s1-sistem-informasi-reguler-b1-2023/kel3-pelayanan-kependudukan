@extends('adminlte::page')

@section('title', 'Pengajuan Dokumen')

@section('content_header')
    <h1 class="m-0">Pengajuan Dokumen</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">Pengajuan Dokumen</div>
        <div class="card-body">
            <form method="post" action="{{ route('documents.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-1">
                            <label for="nama-dokumen" class="form-label">Nama Dokumen</label>
                            <div class="form-group">
                                <select name="document_template_id" id="nama-dokumen-select2" class="form-control">
                                </select>
                                @if ($errors->has('document_template_id'))
                                    <div class="invalid-feedback d-block">{{ $errors->first('document_template_id') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="mb-1">
                            <label for="jusitfikasi-dokumen" class="form-label">Justifikasi</label>
                            <div class="form-group">
                                <textarea name="justifikasi" class="form-control" id="jusitfikasi-dokumen" placeholder="Alasan pengajuan dokumen"></textarea>
                                @if ($errors->has('justifikasi'))
                                    <div class="invalid-feedback d-block">{{ $errors->first('justifikasi') }}</div>
                                @endif
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Ajukan</button>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script>
        $('#nama-dokumen-select2').select2({
            theme: 'bootstrap-5',
            placeholder: "Pilih dokumen",
            minimumInputLength: 0,
            ajax: {
                url: `{{ route('document-templates.select2') }}`,
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
    </script>
@stop
