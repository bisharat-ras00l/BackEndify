<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function register()
    {
        return view('cheffuser.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:cheffusers',
            'password' => 'required|min:6',
        ]);

        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('cheff.login')->with('success', 'Registration Successful');
    }

    public function loginpage()
    {
        return view('cheffuser.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($data)) {
            Log::info('Login successful for user:', ['email' => $data['email']]);
            return redirect()->route('cheff.home')->with('success', 'Login Successful');
        } else {
            Log::info('Login failed for user:', ['email' => $data['email']]);
            return back()->with('error', 'Invalid Credentials');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('cheff.login')->with('success', 'Logout Successful');
    }
}