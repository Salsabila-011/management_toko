<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;
use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $orders = Product::where('cabang_id', $id)->get();
        return view('admin.show', compact('orders')); 
    }

    public function view($id) { 
        $data['branches'] = Branch::findOrFail($id); 
        $data['orders'] = Product::where('cabang_id', $id)->get();
        $data['transaksis'] = Transaksi::where('cabang', $id)->get();
        return view('admin.show', $data); 
    }

    public function generatePDF($id)
{
    
    $orders = Transaksi::where('cabang', $id)->get();

    $pdf = Pdf::loadView('admin.print', compact('orders'));

    return $pdf->download('orders.pdf');
}

}
