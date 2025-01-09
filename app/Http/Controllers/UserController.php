<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function tampil(){
        $users['users'] = User::with('branch')->get();
        return view('admin.pegawai', $users);
    }

    public function edit(String $id){
        $pegawai['pegawai'] = User::find($id);
        return view('admin.edit', $pegawai);
    }

    public function destroy(String $id){
        User::find($id)->delete();
        return redirect()->back();
    }

    public function update( Request $request,  $id)
    {
        $pegawai = User::findOrFail($id); $pegawai->update($request->all());

        return redirect()->route('admin.pegawai');
    }
}
