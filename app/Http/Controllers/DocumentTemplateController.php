<?php

namespace App\Http\Controllers;

use App\Models\DocumentTemplate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Mpdf\Mpdf;

class DocumentTemplateController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentTemplate $documentTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentTemplate $documentTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocumentTemplate $documentTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentTemplate $documentTemplate)
    {
        //
    }

    /**
     * Select2 Ajax
     */
    public function select2(Request $request)
    {
        $term = trim($request->q);
        $items = DocumentTemplate::where('nama_dokumen', 'like', '%' . $term . '%')->limit(5)->get();
        $formatted_items = [];
        foreach ($items as $item) {
            $formatted_items[] = ['id' => $item->id, 'text' => $item->nama_dokumen, 'keterangan' => $item->keterangan];
        }
        return response()->json($formatted_items);
    }

    public function preview(DocumentTemplate $documentTemplate)
    {
        // Create the mPDF document
        $document = new Mpdf();
        $document->WriteHTML(Str::of($documentTemplate->konten)->markdown());
        $document->Output();
    }
}
