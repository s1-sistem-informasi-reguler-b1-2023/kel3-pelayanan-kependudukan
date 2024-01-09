<?php

namespace App\Http\Controllers;

use App\DataTables\DocumentDataTable;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DocumentDataTable $dataTable)
    {
        return $dataTable->render('documents.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $validatedData = $request->validate([
            'document_template_id'  => 'required',
            'justifikasi'           => 'required',
        ]);

        // additional data
        $validatedData['user_id'] = auth()->user()->id;

        //create post
        Document::create($validatedData);

        //redirect to index
        return redirect()->route('documents.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
