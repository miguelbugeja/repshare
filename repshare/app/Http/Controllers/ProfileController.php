<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){
        $user = auth()->user();

        return view('profile.show', compact('user'));
    }

    public function edit(){
        $user = auth()->user();

        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => [
                'required',
                'string',
                'max:255',
                'unique:users,username,' . auth()->id()
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . auth()->id()
            ],
        ]);

        $user = User::findOrFail(auth()->id());

        $user->update($validated);

        return redirect()
            ->route('profile.show')
            ->with('success', 'Profile updated successfully.');
    }

    public function showChangePassword(){
        return view('profile.change-password');
    }

    public function changePassword(Request $request){
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::findOrFail(auth()->id());

        $user->update([
            'password' => $validated['password']
        ]);

        return redirect()
            ->route('profile.show')
            ->with('success', 'Password updated successfully.');
    }
}
