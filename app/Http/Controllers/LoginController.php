<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {   
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'            
        ]);

        $data1 = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];
        
        $data2 = [
            'nis'       => $request->input('username'),
            'password'  => $request->input('password')
        ];


        if($request['role'] == 'admin')
        {
            if(Auth::guard('admin')->attempt($data1))
            {
                $request->session()->regenerate();
                return redirect()->intended('/admin');
            }
            return back()->with('loginError', 'Login Gagal');
        }
        elseif($request['role'] == 'siswa')
        {

        }

        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
