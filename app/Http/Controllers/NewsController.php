<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsArray = News::all();
        return view('news.index', compact('newsArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi kolom
        $validatedData = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal_tayang' => 'required',
        ]);

        $tanggalTayangSplit = explode(' - ', $validatedData['tanggal_tayang']);
        $tanggalPublish = date('Y-m-d H:i:s', strtotime($tanggalTayangSplit[0]));
        $tanggalBerakhir = date('Y-m-d H:i:s', strtotime($tanggalTayangSplit[1]));

        $validatedData['tanggal_publish'] = $tanggalPublish;
        $validatedData['tanggal_berakhir'] = $tanggalBerakhir;

        News::create($validatedData);

        return redirect()->route('news.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('news.view', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('news.update', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        // validasi kolom
        $validatedData = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal_tayang' => 'required',
        ]);

        $tanggalTayangSplit = explode(' - ', $validatedData['tanggal_tayang']);
        $tanggalPublish = date('Y-m-d H:i:s', strtotime($tanggalTayangSplit[0]));
        $tanggalBerakhir = date('Y-m-d H:i:s', strtotime($tanggalTayangSplit[1]));

        $validatedData['tanggal_publish'] = $tanggalPublish;
        $validatedData['tanggal_berakhir'] = $tanggalBerakhir;

        $news->update($validatedData);

        return redirect()->route('news.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news) {
            $news->delete();
            return redirect()->route('news.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('news.index')->with('error', 'Data tidak ditemukan');
        }
    }
}
