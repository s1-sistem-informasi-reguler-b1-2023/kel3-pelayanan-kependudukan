<?php

namespace App\Http\Controllers;

use App\DataTables\ResidentsDataTable;
use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('residents.index', []);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('residents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi kolom
        $validatedData = $request->validate([
            'judul' => 'required',
        ]);

        Resident::create($validatedData);
        return redirect()->route('residents.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resident $resident)
    {
        return view('residents/view', compact('resident'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resident $resident)
    {
        return view('residents.update', compact('resident'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resident $resident)
    {
        // validasi kolom
        $validatedData = $request->validate([
            'judul' => 'required',
        ]);

        $resident->update($validatedData);

        return redirect()->route('residents.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident)
    {
        if ($$resident) {
            $$resident->delete();
            return redirect()->route('residents.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('residents.index')->with('error', 'Data tidak ditemukan');
        }
    }
}
