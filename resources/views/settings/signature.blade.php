@extends('adminlte::page')

@section('title', 'Tanda Tangan')

@section('content_header')
    <h1 class="m-0">Tanda Tangan</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">Ubah Tanda Tangan</div>
        <div class="card-body">
            @if (session()->has('error'))
                <div class="alert alert-danger mb-3">{{ session()->get('error') }}</div>
            @endif
            <form method="post" action="{{ route('settings.signature-upload') }}" id="signatue-form" class="dropzone" novalidate>
                @csrf
            </form>
        </div>
    </div>
@stop

@section('adminlte_js')
    <script>
        Dropzone.options.signatureForm = {
            paramName: "file",
            maxFilesize: 2,
            maxFiles: 1,
            acceptedFiles: ".jpg, .jpeg, .png"
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };
    </script>
@stop
