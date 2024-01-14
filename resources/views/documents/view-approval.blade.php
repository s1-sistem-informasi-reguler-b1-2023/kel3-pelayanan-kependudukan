@extends('adminlte::page')

@section('title', 'Detail Approval Dokumen')

@section('content_header')
    <h1 class="m-0">
        Detail Approval Dokumen</h1>
@stop

{{-- {{ dd(auth()->user()->getRoleNames()) }} --}}

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Preview Dokumen</div>
                <div class="card-body">
                    <embed id="preview-dokumen"
                        src="{{ route('document-templates.preview', $document->documentTemplate->id) }}"
                        class="w-100 vh-100 border rounded" />
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Approval</div>
                <div class="card-body">
                    <div class="timeline mb-0">
                        <div>
                            <i class="fas fa-check bg-success text-white"></i>
                            <div class="timeline-item border border-success">
                                <h3 class="timeline-header d-flex justify-content-between">
                                    <a href="{{ route('residents.show', $document->user->resident->id) }}" target="_blank"
                                        class="text-muted">{{ $document->user->resident->id === auth()->user()->id ? 'Anda' : $document->user->name }}</a>
                                    &nbsp;
                                    <div>
                                        @foreach ($document->user->getRoleNames() as $role)
                                            <div class="badge badge-primary">{{ ucwords($role) }}</div>
                                        @endforeach
                                    </div>
                                </h3>
                                <div class="timeline-body">
                                    {{ $document->justifikasi }}
                                </div>
                            </div>
                        </div>

                        @php
                            $approvedByPrevious = true;
                        @endphp

                        @foreach ($documentTemplateApprovals as $documentTemplateApproval)
                            @php
                                $documentApproval = $documentApprovals->firstWhere('approver_key', $documentTemplateApproval->approver_key);
                            @endphp
                            @if (is_object($documentApproval))
                                @php
                                    $approver = $documentApproval->user;
                                @endphp
                                <div>
                                    <i
                                        class="fas {{ $documentApproval->type == 'APPROVED' ? 'fa-check bg-success' : 'fa-times bg-danger' }}"></i>
                                    <div
                                        class="timeline-item {{ $documentApproval->type == 'APPROVED' ? 'border border-success' : 'border border-danger' }}">
                                        <h3 class="timeline-header d-flex justify-content-between">
                                            <a href="{{ route('residents.show', $approver->id) }}" target="_blank"
                                                class="text-muted">{{ $approver->id == auth()->user()->id ? 'Anda' : $approver->resident->nama_lengkap }}</a>
                                            &nbsp;
                                            <div>
                                                @foreach ($approver->getRoleNames() as $role)
                                                    <div class="badge badge-primary">{{ ucwords($role) }}</div>
                                                @endforeach
                                            </div>
                                        </h3>

                                        <div class="timeline-body">
                                            {{ $documentApproval->justifikasi }}
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $approvedByPrevious = $documentApproval->type == 'APPROVED';
                                @endphp
                            @else
                                @php
                                    $meAsApprover = $documentTemplateApproval->role->users->firstWhere('id', auth()->user()->id);
                                @endphp
                                @if ($meAsApprover)
                                    @if ($approvedByPrevious)
                                        <div>
                                            <i class="fas fa-hourglass bg-warning"></i>
                                            <div class="timeline-item border border-warning">
                                                <h3 class="timeline-header">
                                                    <a href="{{ route('residents.show', $meAsApprover->id) }}"
                                                        target="_blank" class="text-muted">Anda</a>
                                                    &nbsp;
                                                    @foreach ($meAsApprover->getRoleNames() as $role)
                                                        <div class="badge badge-primary">{{ ucwords($role) }}</div>
                                                    @endforeach
                                                </h3>
                                                <form method="post" action="{{ route('document-approvals.store') }}"
                                                    class="p-2">
                                                    @csrf
                                                    <input type="hidden" name="document_id" value="{{ $document->id }}" />
                                                    <input type="hidden" name="approver_key"
                                                        value="{{ $documentTemplateApproval->approver_key }}" />
                                                    <div class="timeline-body mb-2">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="w-100 fw-bold mb-1">Justifikasi
                                                                    Approval</label>
                                                                <textarea name="justifikasi" class="form-control"></textarea>
                                                                @if ($errors->has('konten'))
                                                                    <div class="invalid-feedback d-block">
                                                                        {{ $errors->first('konten') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <button type="submit" name="type" value="APPROVED"
                                                            class="btn btn-sm btn-primary me-1">Approve</button>
                                                        <button type="submit" name="type" value="REJECTED"
                                                            class="btn btn-sm btn-danger me-1">Reject</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @else
                                        <div>
                                            <i class="fas fa-pause bg-muted"></i>
                                            <div class="timeline-item border shadow-none">
                                                <h3 class="timeline-header">
                                                    <a href="{{ route('residents.show', $meAsApprover->id) }}"
                                                        target="_blank" class="text-muted">Anda</a>
                                                    &nbsp;
                                                    @foreach ($meAsApprover->getRoleNames() as $role)
                                                        <div class="badge badge-primary">{{ ucwords($role) }}</div>
                                                    @endforeach
                                                </h3>

                                                <div class="timeline-body">
                                                    <div class="text-muted"><i>Persetujuan dapat diberikan setelah approver
                                                            sebelumnya menyelesaikan
                                                            tugasnya.</i></div>
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                @else
                                    <div>
                                        <i
                                            class="fas {{ $approvedByPrevious ? 'fa-hourglass bg-warning' : 'fa-pause bg-muted' }}"></i>
                                        <div
                                            class="timeline-item {{ $approvedByPrevious ? 'border border-warning' : 'border shadow-none' }}">
                                            <div class="timeline-body">
                                                <div class="text-muted text-center">
                                                    <i>{{ $documentTemplateApproval->keterangan }}</i>
                                                </div>
                                                <div class="text-center">
                                                    @foreach ($documentTemplateApproval->role->users as $userByRole)
                                                        <i><a href="{{ route('residents.show', $document->user->resident->id) }}"
                                                                target="_blank"
                                                                class="me-1">{{ $userByRole->name }}</a></i>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @php
                                    $approvedByPrevious = false;
                                @endphp
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
