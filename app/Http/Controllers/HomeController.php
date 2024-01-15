<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $now = Carbon::now();
        $newsArray = News::where(function ($query) use ($now) {
            $query->where('tanggal_publish', '<=', $now)
                ->where('tanggal_berakhir', '>=', $now);
        })->get();

        return view('home', compact('newsArray'));
    }
}
