<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
    
        $formFields = $request->only('email', 'password');
    
        $user = User::where('email', $formFields['email'])->first();
        if ($user && Hash::check($formFields['password'], $user->password)) {
            Auth::login($user);
            return redirect()->intended(route('user.private'));
        } else {
            return redirect(route('user.login'))->withErrors([
                'email' => 'Не удалось войти в личный кабинет'
            ]);
        }
    }
}
