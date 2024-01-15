<?php

namespace App\Http\Controllers;

use App\Models\TerritoryAvailable;
use Illuminate\Http\Request;

class TerritoryAvailableController extends Controller
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
    public function show(TerritoryAvailable $territoryAvailable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TerritoryAvailable $territoryAvailable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TerritoryAvailable $territoryAvailable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TerritoryAvailable $territoryAvailable)
    {
        //
    }

    public function select2(Request $request)
    {
        $term = trim($request->q);
        $items = TerritoryAvailable::where('rt', 'like', '%' . $term . '%')->limit(5)->get();
        $formatted_items = [];
        foreach ($items as $item) {
            $formatted_items[] = [
                'id' => $item->id,
                'text' => "RT. {$item->rt} RW. {$item->rw}",
                'rt' => $item->rt,
                'rw' => $item->rw,
                'desa_id' => $item->desa_id,
                'kecamatan_id' => $item->kecamatan_id,
                'kabupaten_id' => $item->kabupaten_id,
                'provinsi_id' => $item->provinsi_id,
                'desa' => $item->desa->nama,
                'kecamatan' => $item->kecamatan->nama,
                'kabupaten' => $item->kabupaten->nama,
                'provinsi' => $item->provinsi->nama,
                'negara' => $item->negara,
            ];
        }
        return response()->json($formatted_items);
    }
}
