<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function index()
    {
        $bahan = Bahan::orderBy('id', 'desc')->get();
        return view('bahan.index', compact('bahan'));
    }

    public function create()
    {
        return view('bahan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_bahan' => 'required|max:255',
        ]);

        $bahan = new Bahan();
        $bahan->nama_bahan = $request->nama_bahan;
        $bahan->save();

        return redirect()->route('bahan.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $bahan = Bahan::findOrFail($id);
        return view('bahan.show', compact('bahan'));
    }

    public function edit($id)
    {
        $bahan = Bahan::findOrFail($id);
        return view('bahan.edit', compact('bahan'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_bahan' => 'required|max:255',
        ]);

        $bahan = Bahan::findOrFail($id);
        $bahan->nama_bahan = $request->nama_bahan;
        $bahan->save();

        return redirect()->route('bahan.index')
            ->with('success', 'data berhasil diubah');
    }

    public function destroy($id)
    {
        $bahan = Bahan::findOrFail($id);
        $bahan->delete();

        return redirect()->route('bahan.index')
            ->with('success', 'data berhasil dihapus');
    }
}