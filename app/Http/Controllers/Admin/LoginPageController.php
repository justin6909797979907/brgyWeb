<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class LoginPageController extends Controller
{
    public function login_store(LoginFormRequest $request)
    {

        $validated = $request->validated();

        if (!is_null($validated)) {
            $credentials = [
                'email' => $validated['email'],
                'password' => $validated['password']
            ];

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('dashboard')->with('success', 'Login successful!');
            }
        } else {
            return back()->with('error', 'Invalid login credentials.');
        }

        return back()->with('error', 'Invalid login credentials.');
    }
}
