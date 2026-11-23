<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Display registration form
    public function showRegister(){
        return view('auth.register');
    }

    // Handle registration
    public function register(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $role = Role::where('name', 'User')->firstOrFail();

        $user = new User([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        $user->role()->associate($role);
        $user->save();

        Auth::login($user);

        $request->session()->regenerate();

        return redirect('/');
    }

    // Display login form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request){
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        
        return back()->withErrors([
            'username' => 'The provided credentials are not recognized.'
        ])->onlyInput('username');
    }

    // Hanlde logout
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
