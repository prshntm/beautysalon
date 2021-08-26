<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Middleware\IsAdmin;
use Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

class RegisterController extends Controller
{
    public function addUser(Request $request)
    {
        /*$newuser = [
            'email' => $request->email;
            'password' => $request->password;
        ];*/
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $data = array('email' => $request->email);
        Mail::to($request->email)->send(new RegisterMail($data));
        return redirect('auth.login')->with('success', 'Регистрация прошла успешно. Вам отправлено письмо с подтверждением регистрации');
    }
    public function register()
    {
        return view('auth.register');
    }
}
