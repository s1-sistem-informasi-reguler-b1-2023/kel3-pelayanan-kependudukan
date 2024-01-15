@extends('adminlte::page')

@section('title', 'Pengajuan Dokumen')

@section('content_header')
    <h1 class="m-0">Pengajuan Dokumen</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Pengajuan Dokumen</div>
                <div class="card-body">
                    <form method="post" action="{{ route('documents.store') }}" id="documents-create">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label for="nama-dokumen" class="form-label">Nama Dokumen</label>
                                    <div class="form-group">
                                        <select name="document_template_id" id="nama-dokumen-select2"
                                            class="form-control select2-single w-100" required>
                                        </select>
                                        <div><small><i class="text-muted" id="keterangan-dokumen"></i></small></div>
                                    </div>
                                    @if ($errors->has('document_template_id'))
                                        <div class="invalid-feedback d-block mt-0">
                                            {{ $errors->first('document_template_id') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-1">
                                    <label for="jusitfikasi-dokumen" class="form-label">Justifikasi</label>
                                    <div class="form-group">
                                        <textarea name="justifikasi" class="form-control" id="jusitfikasi-dokumen" placeholder="Alasan pengajuan dokumen"
                                            required></textarea>
                                    </div>
                                    @if ($errors->has('justifikasi'))
                                        <div class="invalid-feedback d-block mt-0">{{ $errors->first('justifikasi') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <button class="btn btn-primary mb-3" type="submit">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card d-none" id="preview-dokumen">
                <div class="card-header">Preview Dokumen</div>
                <div class="card-body">
                    <embed id="preview-dokumen-embed" src="" class="w-100 vh-100 border rounded" />
                </div>
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script>
        $('#documents-create').validate();
        $('#nama-dokumen-select2').select2({
            theme: 'bootstrap4',
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
                // validation
                $(this).valid();

                let url = '{{ route('document-templates.preview', ':id') }}'
                url = url.replace(':id', e.params.data.id)

                $('#keterangan-dokumen').removeClass('d-none').text(e.params.data.keterangan)

                $('#preview-dokumen').removeClass('d-none')
                $('#preview-dokumen-embed').attr('src', url)
            } else {
                $('#keterangan-dokumen').text('').addClass('d-none')

                $('#preview-dokumen').addClass('d-none')
            }
        })
    </script>
@stop
