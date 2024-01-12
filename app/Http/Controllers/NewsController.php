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
        ]);

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
        ]);

        $news->update($validatedData);

        return redirect()->route('news.index')->with('success', 'Data berhasil diperbarui');
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
