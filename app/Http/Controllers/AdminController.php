<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        if (auth()->guard('petugas')->check()) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function cekLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username harus diisi!',
            'password.required' => 'Password harus diisi!',
        ]);

        $data_user = $request->only(['username', 'password']);

        if (auth()->guard('petugas')->attempt($data_user)) {
            $request->session()->regenerate();
            $petugas = auth()->guard('petugas')->user();
            $request->session()->put('petugas', $petugas);
            $request->session()->put('role', $petugas->role);
            return redirect()->route('dashboard')->with('success', 'Berhasil login!');
        } else {
            if (!auth()->guard('petugas')->attempt(['username' => $request->username])) {
                session()->put('errors', collect(['username' => 'Username tidak ditemukan!']));
                return back()->withInput($request->only('username'));
            }
            session()->put('errors', collect(['password' => 'Password yang anda masukkan salah!']));
            return back()->withInput($request->only('username'));
        }
    }
    public function dashboard()
    {
        if (!auth()->guard('petugas')->check()) {
            return redirect('/login');
        }
        return view('dashboard');
    }

    public function logout(Request $request)
    {
        auth()->guard('petugas')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Berhasil logout');
    }

    
}
