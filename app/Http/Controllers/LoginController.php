<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index () {
        return view('auth.login');
    }

    public function authenticate (Request $request) {
        $credential = $request->validate([
            "username" => "required|min:5|max:10",
            "password" => "required|min:3"
        ]);
        if ( Auth::attempt($credential) ) {
            $request->session()->regenerate();
            if(Auth()->User()->is_supplier) {
                return redirect()->intended('/supplier')->with('success', 'Login Berhasil!');
            }else {
                return redirect()->intended('/')->with('success', 'Login Berhasil!');
            }
        }
        return back()->with('fail', 'Anda Gagal Login');
    }

    public function destroy (Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil Logout');
    }
}
