<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Bahan;
use App\Models\Resep;

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
        $total_kategori = Kategori::count('id');
        $total_bahan = Bahan::count('id');
        $total_resep = Resep::count('id');
        return view('home', compact('total_kategori', 'total_bahan', 'total_resep',));
    }
}
