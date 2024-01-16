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
        $validator = \Validator::make($request->all(), [
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

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validatedData = $validator->validated();

        \DB::beginTransaction();

        try {
            $validatedData['no_kk'] = $request->no_kk;
            $validatedData['nik'] = $request->nik;
            $validatedData['nama_lengkap'] = $request->nama_lengkap;
            $validatedData['jenis_kelamin'] = $request->jenis_kelamin;
            $validatedData['tempat_lahir'] = $request->tempat_lahir;
            $validatedData['tanggal_lahir'] = $request->tanggal_lahir;
            $validatedData['agama'] = $request->agama;
            $validatedData['pekerjaan'] = $request->pekerjaan;
            $validatedData['status_perkawinan'] = $request->status_perkawinan;
            $validatedData['alamat'] = $request->alamat;
            $validatedData['rt'] = $request->rt;
            $validatedData['rw'] = $request->rw;
            $validatedData['desa_id'] = $request->desa_id;
            $validatedData['kecamatan_id'] = $request->kecamatan_id;
            $validatedData['kabupaten_id'] = $request->kabupaten_id;
            $validatedData['provinsi_id'] = $request->provinsi_id;
            $validatedData['negara'] = $request->negara;
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
                    'email' => $resident->nik,
                    'email_verified_at' => now(),
                    'password' => Hash::make('password'),
                    'remember_token' => Str::random(10),
                ]);
            }

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            return redirect()->route('residents.create')->withInput()->with(['error' => 'Data Gagal Disimpan!']);
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
        $validator = \Validator::make($request->all(), [
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
            'territory' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validatedData = $validator->validated();

        \DB::beginTransaction();

        try {
            $validatedData['no_kk'] = $request->no_kk;
            $validatedData['nik'] = $request->nik;
            $validatedData['nama_lengkap'] = $request->nama_lengkap;
            $validatedData['jenis_kelamin'] = $request->jenis_kelamin;
            $validatedData['tempat_lahir'] = $request->tempat_lahir;
            $validatedData['tanggal_lahir'] = $request->tanggal_lahir;
            $validatedData['agama'] = $request->agama;
            $validatedData['pekerjaan'] = $request->pekerjaan;
            $validatedData['status_perkawinan'] = $request->status_perkawinan;
            $validatedData['alamat'] = $request->alamat;
            $validatedData['rt'] = $request->rt;
            $validatedData['rw'] = $request->rw;
            $validatedData['desa_id'] = $request->desa_id;
            $validatedData['kecamatan_id'] = $request->kecamatan_id;
            $validatedData['kabupaten_id'] = $request->kabupaten_id;
            $validatedData['provinsi_id'] = $request->provinsi_id;
            $validatedData['negara'] = $request->negara;
            $validatedData['tanggal_lahir'] = date('Y-m-d', strtotime($validatedData['tanggal_lahir']));
            $validatedData['alamat_asal'] = $request->alamat_asal ?? '';
            $validatedData['rt_asal'] = $request->rt_asal ?? '';
            $validatedData['rw_asal'] = $request->rw_asal ?? '';
            $validatedData['desa_asal'] = $request->desa_asal ?? '';
            $validatedData['kecamatan_asal'] = $request->kecamatan_asal ?? '';
            $validatedData['kabupaten_asal'] = $request->kabupaten_asal ?? '';
            $validatedData['provinsi_asal'] = $request->provinsi_asal ?? '';
            $validatedData['negara_asal'] = $request->negara_asal ?? '';

            $resident = Resident::where('id', $request->id)->firstOrFail();

            if ($resident) {
                $user = User::where('resident_id', $resident->id)->first();
                $user->username = $resident->nik;
                $user->name = $resident->nama_lengkap;
                $user->email = $resident->nik;
                $user->save();
            }

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            return redirect()->route('residents.create')->withInput()->with(['error' => 'Data Gagal Disimpan!']);
        }

        return redirect()->route('residents.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resident $resident)
    {
        if ($resident) {
            $resident->delete();
            return redirect()->route('residents.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('residents.index')->with('error', 'Data tidak ditemukan');
        }
    }
}
