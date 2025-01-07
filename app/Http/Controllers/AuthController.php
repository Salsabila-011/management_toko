<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        return view ('registrasi');
    }

    function submit(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->roles = $request->roles;
        $user->save();
        
        return redirect()->route('logacc.index');
    }
    
    function indexlogin(){
        return view('logacc');
    }

    function submitlogin(Request $request){
        $data = $request->only('email', 'password');
        

        if (Auth::attempt($data)){
            $request->session()->regenerate();
            if($request->user()->roles == 'Admin_Utama'){
                return redirect('admin/dashboard');
            }
    
            return redirect()->intended(route('dashboard'));
            
        }else{
            return redirect()->back()->with('gagal', 'email atau password salah');
        }
    }
}
