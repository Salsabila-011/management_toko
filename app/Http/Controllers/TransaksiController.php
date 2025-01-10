<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        $products = Transaksi::with('product')->get();
        return view('supervisor', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
    return view('transaksis.create', compact('products'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $jumlah = $request->jumlah;
        $harga = $product->harga;
        $total_harga = $jumlah * $harga;

        Transaksi::create([
            'product_id' => $product->id,
            'jumlah' => $jumlah,
            'harga' => $harga,
            'total_harga' => $total_harga,
            
        ]);

        return redirect()->route('transaksis.index');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

   
}
