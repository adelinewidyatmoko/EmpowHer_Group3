<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function display()
    {
        return view('auth.login');
    }

    public function formValidate(Request $request)
    {
        function dataValidate(Request $request)
        {
            return $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
        }

        // Attempt login
        if (Auth::attempt(dataValidate($request))) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // If login fails
        throw ValidationException::withMessages([
            'email' => ['The provided credentials do not match our records.'],
        ]);
    }

    public function displayForgotPassword()
    {
        return view('auth.forgot-password');
    }
}
