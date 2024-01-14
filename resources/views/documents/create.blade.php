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
                <div class="row align-items-end">
                    <div class="col-md-5">
                        <div class="mb-1">
                            <label for="nama-dokumen" class="form-label">Nama Dokumen</label>
                            @if ($errors->has('document_template_id'))
                                <div class="invalid-feedback d-block mt-0">{{ $errors->first('document_template_id') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <select name="document_template_id" id="nama-dokumen-select2" class="form-control">
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-1">
                            <label for="jusitfikasi-dokumen" class="form-label">Justifikasi</label>
                            @if ($errors->has('justifikasi'))
                                <div class="invalid-feedback d-block mt-0">{{ $errors->first('justifikasi') }}</div>
                            @endif
                            <div class="form-group">
                                <input name="justifikasi" class="form-control" id="jusitfikasi-dokumen"
                                    placeholder="Alasan pengajuan dokumen" />

                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100 mb-3" type="submit">Ajukan</button>
                    </div>
                </div>
                <embed id="preview-dokumen" src="" class="d-none w-100 vh-100 border rounded" />
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

        $('#nama-dokumen-select2').on('select2:select', function(e) {
            if (e.params.data) {
                let url = '{{ route('document-templates.preview', ':id') }}'
                url = url.replace(':id', e.params.data.id)
                $('#preview-dokumen').removeClass('d-none').attr('src', url)
            } else {
                $('#preview-dokumen').addClass('d-none')
            }
        })
    </script>
@stop
