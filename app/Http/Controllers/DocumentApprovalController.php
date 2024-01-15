<?php

namespace App\Http\Controllers;

use App\Models\DocumentApproval;
use Illuminate\Http\Request;

class DocumentApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $validatedData = $request->validate([
            'document_id' => 'required',
            'approver_key' => 'required',
            'justifikasi' => 'required',
            'type' => 'required',
        ]);

        // additional data
        $validatedData['user_id'] = auth()->user()->id;

        //create post
        $documentApproval = DocumentApproval::create($validatedData);

        //redirect to index
        return redirect()->route('documents.approval-show', $documentApproval->document->id)->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentApproval $documentApproval)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentApproval $documentApproval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocumentApproval $documentApproval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentApproval $documentApproval)
    {
        //
    }
}
