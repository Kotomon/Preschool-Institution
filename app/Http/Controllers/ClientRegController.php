<?php

namespace App\Http\Controllers;

use App\Models\ClientReg;
use Illuminate\Http\Request;

class ClientRegController extends Controller
{
    public function regist(Request $request)
    {
        if ($request -> input('subscribe') == 1) 
        {
            $new_reg = new ClientReg();
            $new_reg -> childs_name = $request->input('childs_name');
            $new_reg -> last_name_child = $request->input('last_name_child');
            $new_reg -> child_birthday = $request->input('child_birthday');
            $new_reg -> message = $request->input('message');
            $new_reg -> client_last_name = $request->input('client_last_name');
            $new_reg -> client_first_name = $request->input('client_first_name');
            $new_reg -> client_patronymic = $request->input('client_patronymic');
            $new_reg -> email = $request->input('email');
            $new_reg -> dop_contact = $request->input('dop_contact'); 
            $new_reg->save();
            return redirect('/')->with('success', 'Заявка отправлена');
        }
        else
        {
            return redirect('/')->with('error', 'Вы не дали ваше согласие на обработку ваших персональных данных');
        }
    }
}
