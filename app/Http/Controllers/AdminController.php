<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function authenticate(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');
    
        // Проверяем, если администратор аутентифицирован, редиректим их на страницу регистрации
        if ($login == 'admin' && $password == 'qwert') {
            return redirect()->route('registration')->middleware('admin');
        }
    
        // Если логин или пароль не верны, редиректим их на страницу аутентификации
        return redirect()->route('admin')->with('error', 'Неправильный логин или пароль');
    }
}