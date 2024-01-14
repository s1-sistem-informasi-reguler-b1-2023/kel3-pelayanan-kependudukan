<?php

namespace Database\Seeders;

use App\Models\DocumentTemplate;
use App\Models\DocumentTemplateApproval;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documentTemplate = DocumentTemplate::create([
            'nama_dokumen' => 'Surat Keterangan Domisili',
            'konten' => '[Alamat RT/RW]

            [Tempat, Tanggal]

            Kepala Desa [Nama Desa/Kelurahan]
            Kecamatan [Nama Kecamatan]
            Kabupaten/Kota [Nama Kabupaten/Kota]

            Perihal: Permohonan Surat Keterangan Domisili

            Yang bertanda tangan di bawah ini,

            Nama: [Nama Lengkap]
            Tempat/Tanggal Lahir: [Tempat, Tanggal Lahir]
            Pekerjaan: [Pekerjaan]
            Alamat: [Alamat Lengkap]

            Dengan ini mengajukan permohonan Surat Keterangan Domisili untuk keperluan [sebutkan keperluan] yang akan digunakan sebagai salah satu syarat administrasi. Adapun data pendukung sebagai berikut:

            1. Nomor Kartu Keluarga: [Nomor KK]
            2. Nomor Induk Kependudukan (NIK): [NIK]
            3. Nomor Telepon yang dapat dihubungi: [Nomor Telepon]

            Demikian surat permohonan ini saya buat dengan sebenar-benarnya dan apabila terdapat kesalahan dalam pengisian data, saya siap untuk memperbaikinya. Atas perhatian dan kerjasamanya, saya ucapkan terima kasih.

            Hormat saya,

            [Tanda Tangan]

            [Nama Lengkap]

            ______________________
            [Cap dan Tanda Tangan RT/RW]
            RT [Nomor RT] / RW [Nomor RW]
            Desa/Kelurahan [Nama Desa/Kelurahan]',
            'keterangan' => 'Diharapkan untuk melampirkan file KTP dan KK.'
        ]);

        DocumentTemplateApproval::create([
            'document_template_id' => $documentTemplate->id,
            'role_id' => 2,
            'approver_key' => 'APPROVER_' . $documentTemplate->id . '_1',
            'order' => 1,
            'keterangan' => 'Approval dilakukan oleh RT',
        ]);

        DocumentTemplateApproval::create([
            'document_template_id' => $documentTemplate->id,
            'role_id' => 1,
            'approver_key' => 'APPROVER_' . $documentTemplate->id . '_1',
            'order' => 2,
            'keterangan' => 'Approval dilakukan oleh RW',
        ]);
    }
}
