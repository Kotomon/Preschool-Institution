<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function save(Request $request){
        $validateFields = $request->validate([
            'email'=>'required|email',
            'password'=> 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'patronymic' => 'required',
            'age' => 'required',
            'telephone' => 'required',
            'workplace' => 'required',
            'additional_contact_for_communication' => 'required',
            'child_id' => 'required',
            'program' => 'required'
        ]);
        if (User::where('email', $validateFields['email'])->exists()) {
            return redirect(route('admin.registration'))->withErrors([
                'email'=> 'Такой пользователь уже существует'
            ]);
        }
        try
        {
            $user = User::create($validateFields);
            if($user){
                Auth::login($user);
                return redirect(route('user.private'));
            }
        }
        catch (\Exception $e)
        {
            return redirect(route('admin.login'))->withErrors([
                'formError'=> 'Произошла ошибка при сохранении пользователя: ' . $e->getMessage()
            ]);
        }
        return redirect(route('admin.login'))->withErrors([
            'formError'=> 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
