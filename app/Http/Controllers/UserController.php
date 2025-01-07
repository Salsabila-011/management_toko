<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function create() 
    { 
        $roles = Role::all(); return view('user.create', compact('roles'));
    }
     public function store(Request $request) 
    { $validated = $request->validate([ 
        'name' => 'required|string|max:255', 
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed', 
        'role' => 'required|string|exists:roles,name', ]); 
         $user = User::create([ 
            'name' => $validated['name'], 
            'email' => $validated['email'], 
            'password' => bcrypt($validated['password']), 
        ]);  
        $user->assignRole($validated['role']); 
        return redirect()->route('user.index')->with('success', 'Pengguna berhasil dibuat dengan role '.$validated['role']); 
    }

     public function index() 
    { 
        $users = User::with('roles')->get(); 
        return view('user.index', compact('users')); 
    }
}
