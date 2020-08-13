<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function validation(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect(route('dashboard'));
        } else {
            return redirect(route('login'))->with('status', 'Gagal Login, Cek Kembali Email dan Password Anda');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function makeAccount(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|same:cpassword',
            'cpassword' => 'required|same:password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect(route('login'))->with('status', 'Pendaftaran Berhasil, Silahkan Login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'))->with('status', 'Terima Kasih');
    }
}
