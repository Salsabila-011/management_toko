<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BranchController extends Controller
{
    public function index(Request $request){
        $user = Auth::user()->cabang;
        return view('manager.index', compact('user'));
    }

    public function transaksi(){
        $id = Auth::user()->cabang;
        $orders = Transaksi::where('cabang', $id)->get();
        return view('manager.show', compact('orders'));
    }
}
