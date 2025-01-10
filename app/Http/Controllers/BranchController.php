<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
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

    public function generatePDF()
{
    $cabang = Auth::user()->cabang;
    $orders = Transaksi::where('cabang', $cabang)->get();

    $pdf = Pdf::loadView('manager.print', compact('orders'));

    return $pdf->download('orders.pdf');
}
}
