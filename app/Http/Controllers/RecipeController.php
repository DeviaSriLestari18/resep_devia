<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class RecipeController extends Controller
{
    public function search(Request $request){

        $request->validate([
            'query' => 'required|string|max:255',
        ]);
    
        $resep = Resep::where('nama', 'like', '%' . $request->input('query') . '%')
        ->orWhereHas('bahan', function ($query) use ($request) {
            $query->where('nama_bahan', 'like', '%' . $request->input('query') . '%');
        })
        ->inRandomOrder()
        ->limit(10)
        ->get();
    
        $randomResep = $resep->random();
        return view('search', compact('randomResep'));
        }

}
