<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function tampil(Request $request) { 
        $branches = Branch::all();
        $kategori = $request->input('kategori');
        $products = Product::when($kategori, function ($query, $kategori) {
            return $query->where('kategori', $kategori);
        })->get();
        return view('admin.branch', compact('branches'), compact('products'));
     }

     public function show($id) { 
        $branches = Branch::findOrFail($id); 
        return view('admin.show', compact('branches')); 
    }
}
