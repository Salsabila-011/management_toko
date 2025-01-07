<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function tampil() { 
        $branches = Branch::all();
        return view('branch.index', compact('branches'));
     }

     public function show($id) { 
        $branches = Branch::findOrFail($id); 
        return view('branch.show', compact('branches')); 
    }
}
