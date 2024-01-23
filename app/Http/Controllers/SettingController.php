<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function signature()
    {
        return view('settings.signature');
    }

    public function signatureUpload(Request $request)
    {
        $file = $request->file('file');

        $file = $request->file('file');

        $path = $file->store('uploads');

        $fileRecord = \App\Models\File::create([
            'fileable_id' => $request->user()->id,
            'fileable_type' => get_class($request->user()),
            'nama_file' => $file->getClientOriginalName(),
            'mime_file' => $file->getClientMimeType(),
            'ukuran_file' => $file->getSize(),
            'file_path' => $path,
            'jenis_file' => 'TANDA_TANGAN',
        ]);

        return response()->json(['message' => 'Signature successfully', 'path' => $path, 'fileRecord' => $fileRecord]);
    }
}
