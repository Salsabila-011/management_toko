<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function superdash(Request $request){
        $user = Auth::user()->cabang;
        return view('supervisor.index', compact('user'));
    }

    public function supershow(Request $request){
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
    
        // Mendapatkan cabang dari pengguna yang sedang login
        $cabang = Auth::user()->cabang;
    
        // Memfilter transaksi berdasarkan cabang
        $query = Transaksi::where('cabang', $cabang);
    
        if ($fromDate && $toDate) {
            $query->whereBetween('created_at', [$fromDate, $toDate]);
        }
    
        $orders = $query->get();
    
        return view('supervisor.show', compact('orders'));
        // $orders = Transaksi::where('cabang', $id)->get();
        // return view('supervisor.show', compact('orders'));
    }

    
    public function kasir(Request $request){
        $user = Auth::user()->cabang;
        return view('kasir.index', compact('user'));
    }

    public function gudang(Request $request){
        $user = Auth::user()->cabang;
        return view('gudang.index', compact('user'));
    }

    public function gudangcreate(){
        $categories = ['T-shirt', 'Kemeja', 'Celana', 'Rok'];
        $branches = auth()->user()->cabang;
        return view('gudang.create', compact('categories', 'branches'));
    }

    function gudangstore(Request $request){

        $gudang = new Product();
        $user = Auth::user()->cabang;
        $gudang->nama_produk = $request->nama_produk;
        $gudang->kategori = $request->kategori;
        $gudang->harga = $request->harga;
        $gudang->stok = $request->stok;
        $gudang->cabang_id = $user;    
        $gudang->save();    
       
        
        return redirect()->route('gudang.dashboard');
        // $request->validate([
        //     'nama_produk' => 'required|string|max:255',
        //     'kategori' => 'required|string',
        //     'harga' => 'required|numeric',
        //     'stok' => 'required|integer',
        //     'cabang' => 'required|string',
        // ]);
        // $data = $request->all();
        // $data['cabang'] = Auth::user()->cabang;

        // Product::create($data);

        // return redirect()->route('gudang.dashboard');
    }

    public function gudangstok(Request $request){
        $id = Auth::user()->cabang;
        $data['branches'] = Branch::findOrFail($id); 
        $data['orders'] = Product::where('cabang_id', $id)->get();
        return view('gudang.stok', $data); 
    }

    
}
