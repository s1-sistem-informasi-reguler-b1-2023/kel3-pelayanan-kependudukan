<?php

namespace App\Http\Controllers;

use App\Helpers\DateHelper;
use App\Models\DocumentTemplate;
use App\Models\User;
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

    function replacePlaceholders($template, $data)
    {
        preg_match_all('/\[([^\]]+)\]/', $template, $matches);
        foreach ($matches[1] as $placeholder) {
            $placeholderSplit = explode(':', $placeholder);
            if (count($placeholderSplit) > 1) {
                list($kategori, $nama_variabel) = $placeholderSplit;
                if (isset($data[$kategori]) && isset($data[$kategori][$nama_variabel])) {
                    $placeholderToReplace = "[$kategori:$nama_variabel]";

                    $template = str_replace($placeholderToReplace, $data[$kategori]->{$nama_variabel}, $template);
                }
            } elseif (count($placeholderSplit) == 1) {
                list($kategori) = $placeholderSplit;
                if (isset($data[$kategori])) {
                    $placeholderToReplace = "[$kategori]";
                    $template = str_replace($placeholderToReplace, $data[$kategori], $template);
                }
            }
        }

        return $template;
    }

    public function preview(DocumentTemplate $documentTemplate)
    {
        $pengaju = auth()->user()->resident;
        $rt = User::with('roles')->get()->filter(
            fn($user) => $user->roles->where('name', 'rt')->toArray()
        )->first()->resident;
        $now = now();

        $markdown = $this->replacePlaceholders($documentTemplate->konten, [
            'pengaju' => $pengaju,
            'rt' => $rt,
            'now' => DateHelper::formatAsIndonesianDate(date('Y-m-d')),
        ]);

        // Create the mPDF document
        $document = new Mpdf();
        $document->WriteHTML(Str::of($markdown)->markdown());
        $document->Output();
    }
}
