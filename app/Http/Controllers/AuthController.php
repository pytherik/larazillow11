<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function create()
    {
        return inertia('Auth/Login');
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request)
    {

        if(!Auth::attempt($request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]), true)) {
            throw ValidationException::withMessages([
                'email' => 'Authentifikation fehlgeschlagen'
            ]);
        }
        $request->session()->regenerate();

        return redirect()->intended();
    }

    public function destroy()
    {

    }
}
