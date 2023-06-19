<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('access.index', [
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            "username" => "required|unique:users",
            "name" => "required",
            "address" => "required",
            "password" => "required",
        ]);

        if($request->input('role_access') == 1) {
            $validateData['is_supplier'] = 1;
        }

        if($validateData['password'] === $request->password2) {
            $validateData['password'] = Hash::make($validateData['password']);
            User::create($validateData);
            return back()->with('success', 'Pengguna baru berhasil ditambahkan!');
        }


    }
}
