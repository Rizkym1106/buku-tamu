<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],


        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard.index');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);

    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}