<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //memanggil form login
    function index()
    {
        return view('pages.auth.login');
    }

    //memproses login
    function login(Request $request)
    {
        //validasi user
        $validatedLogin = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        //proses login, cek didatabase apakah inoutan sesuai dengan yang ada
        if (Auth::attempt([$validatedLogin])) {
            //redirect
            return redirect()->to('/merk');
        } else {
            return redirect()->back();
        }
    }

    function logut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login');
    }
}
