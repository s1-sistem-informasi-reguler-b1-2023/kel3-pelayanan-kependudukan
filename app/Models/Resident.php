<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resident extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        'no_kk',
        'nik',
        'nama_lengkap',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pekerjaan',
        'status_perkawinan',
        'alamat',
        'rt',
        'rw',
        'desa_id',
        'kecamatan_id',
        'kabupaten_id',
        'provinsi_id',
        'negara',
        'alamat_asal',
        'rt_asal',
        'rw_asal',
        'desa_asal',
        'kecamatan_asal',
        'kabupaten_asal',
        'provinsi_asal',
        'negara_asal',
        'created_by',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function desa()
    {
        return $this->hasOne(Territory::class, 'id', 'desa_id');
    }
    public function kecamatan()
    {
        return $this->hasOne(Territory::class, 'id', 'kecamatan_id');
    }
    public function kabupaten()
    {
        return $this->hasOne(Territory::class, 'id', 'kabupaten_id');
    }
    public function provinsi()
    {
        return $this->hasOne(Territory::class, 'id', 'provinsi_id');
    }

    // jenis kelamin
    public function getNamaJenisKelaminAttribute()
    {
        return $this->jenis_kelamin == 'LAKI_LAKI' ? 'Laki-laki' : 'Perempuan';
    }

    // teritory
    public function getNamaDesaAttribute()
    {
        return $this->desa->nama;
    }

    public function getNamaKecamatanAttribute()
    {
        return $this->kecamatan->nama;
    }

    public function getNamaKabupatenAttribute()
    {
        return $this->kabupaten->nama;
    }

    public function getNamaProvinsiAttribute()
    {
        return $this->provinsi->nama;
    }

    public function getTerritoryAttribute()
    {
        return TerritoryAvailable::
            where('rt', $this->rt)
            ->where('rw', $this->rw)
            ->where('desa_id', $this->desa_id)
            ->where('kecamatan_id', $this->kecamatan_id)
            ->where('kabupaten_id', $this->kabupaten_id)
            ->where('provinsi_id', $this->provinsi_id)
            ->where('negara', $this->negara)->first();
    }
}
