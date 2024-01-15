<?php

namespace App\Http\Controllers;

use App\DataTables\ResidentsDataTable;
use App\Models\Resident;
use App\Models\TerritoryAvailable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resident = Resident::all();
        return view('residents.index', ['resident' => $resident]);
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
        $validatedData = $request->validate([
            'no_kk' => 'required',
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa_id' => 'required',
            'kecamatan_id' => 'required',
            'kabupaten_id' => 'required',
            'provinsi_id' => 'required',
            'negara' => 'required',
        ]);

        $validatedData['tanggal_lahir'] = date('Y-m-d', strtotime($validatedData['tanggal_lahir']));
        $validatedData['alamat_asal'] = $request->alamat_asal ?? '';
        $validatedData['rt_asal'] = $request->rt_asal ?? '';
        $validatedData['rw_asal'] = $request->rw_asal ?? '';
        $validatedData['desa_asal'] = $request->desa_asal ?? '';
        $validatedData['kecamatan_asal'] = $request->kecamatan_asal ?? '';
        $validatedData['kabupaten_asal'] = $request->kabupaten_asal ?? '';
        $validatedData['provinsi_asal'] = $request->provinsi_asal ?? '';
        $validatedData['negara_asal'] = $request->negara_asal ?? '';

        $resident = Resident::create($validatedData);

        if ($resident) {
            User::create([
                'resident_id' => $resident->id,
                'username' => $resident->nik,
                'name' => $resident->nama_lengkap,
                'email' => $resident->nik . '@' . env('APP_URL'),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]);
        }

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
        $territoryAvailables = TerritoryAvailable::get();
        return view('residents.update', compact('resident', 'territoryAvailables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resident $resident)
    {
        // validasi kolom
        $validatedData = $request->validate([
            'no_kk' => 'required',
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'alamat' => 'required',
        ]);

        $validatedData['tanggal_lahir'] = date('Y-m-d', strtotime($validatedData['tanggal_lahir']));
        $validatedData['alamat_asal'] = $request->alamat_asal ?? '';
        $validatedData['rt_asal'] = $request->rt_asal ?? '';
        $validatedData['rw_asal'] = $request->rw_asal ?? '';
        $validatedData['desa_asal'] = $request->desa_asal ?? '';
        $validatedData['kecamatan_asal'] = $request->kecamatan_asal ?? '';
        $validatedData['kabupaten_asal'] = $request->kabupaten_asal ?? '';
        $validatedData['provinsi_asal'] = $request->provinsi_asal ?? '';
        $validatedData['negara_asal'] = $request->negara_asal ?? '';

        if ($resident->update($validatedData)) {
            $user = \App\Models\User::where('resident_id', $resident->id)->first();
            $user->name = $resident->nama_lengkap;
            $user->save();
        }

        return redirect()->route('residents.show', $resident->id)->with('success', 'Data berhasil diperbarui');
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
