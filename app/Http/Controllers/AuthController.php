<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login', ['title' => 'Login']);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil
            $request->session()->regenerate();
            if (Auth::user()->is_admin === 1) return redirect()->intended('dashboard');
            return redirect()->intended('/');
        }

        // Login gagal
        return back()->with('loginError', 'Please check your email and password.');
    }

    // public function showRegistrationForm()
    // {
    //     return view('auth.register', ['title' => 'Register']);
    // }

    public function register(Request $request)
    {
        // // Validasi data registrasi
        // $this->validate($request, [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);

        // // Buat pengguna baru
        // $user = new User;
        // $user->name = $request->name;
        // $user->email = strtolower($request->email);
        // $user->password = bcrypt($request->password);
        // $user->save();

        // return redirect('/login');
        abort(404);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}