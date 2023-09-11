<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        // валидация данных формы
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);
        
        // отправка письма на email администратора
        Mail::to('veresovden@mail.ru')->send(new \App\Mail\Feedback($request->all()));
        // редирект на страницу с сообщением об успешной отправке
        return redirect('/create')->with('success', 'Сообщение отправлено!');
    }
}
