<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->rol === 'admin') {
                return redirect('/principal')->with('success', 'Inicio de sesión exitoso');
            } else {
                return redirect('/dashboard')->with('success', 'Inicio de sesión exitoso');
            }
        }    

        return back()->with('error', 'Correo o contraseña incorrecta.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function logoutrecep()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
