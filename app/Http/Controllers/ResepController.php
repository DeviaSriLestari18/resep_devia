<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\Kategori;
use App\Models\Bahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResepController extends Controller
{
    public function index()
    {
        $resep = Resep::latest()->get();
        return view('resep.index', compact('resep'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $bahan = Bahan::all();
        return view('resep.create', compact('kategori', 'bahan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'cara_buat' => 'required',
            'gambar' => 'required|max:4000|mimes:png,jpg',
            'id_kategori' => 'required',
            'id_bahan' => 'required',
        ]);

        $resep = new Resep();
        $resep->nama = $request->nama;
        $resep->deskripsi = $request->deskripsi;
        $resep->cara_buat = $request->cara_buat;
        $resep->id_kategori = $request->id_kategori;
        $resep->id_bahan = $request->id_bahan;

        // upload foto
        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/resep/', $name);
            $resep->gambar = $name;
        }

        $resep->save();
        return redirect()->route('resep.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $resep = Resep::findOrFail($id);
        return view('resep.show', compact('resep'));
    }

    public function edit($id)
    {
        $kategori = Kategori::all();
        $bahan = Bahan::all();
        $resep = Resep::findOrFail($id);
        return view('resep.edit', compact('resep', 'kategori' , 'bahan'));
    }

    public function update(Request $request, $id)
        {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            // 'bahan' => 'required|string',
            'cara_buat' => 'required',
            'gambar' => 'required|max:4000|mimes:png,jpg',
            'id_kategori' => 'required',
            'id_bahan' => 'required',
        ]);

        $resep = Resep::findOrFail($id);
        $resep->nama = $request->nama;
        $resep->deskripsi = $request->deskripsi;
        // $resep->bahan = $request->bahan;
        $resep->cara_buat = $request->cara_buat;
        $resep->id_kategori = $request->id_kategori;
        $resep->id_bahan = $request->id_bahan;

        // upload foto
        if ($request->hasFile('gambar')) {
            $img = $request->file('gambar');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/resep/', $name);
            $resep->gambar = $name;
        }

        $resep->save();
        return redirect()->route('resep.index')
            ->with('success', 'data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $resep = Resep::FindOrFail($id);
        $resep->delete();
        return redirect()->route('resep.index')
            ->with('success', 'data berhasil dihapus');

    }
}
