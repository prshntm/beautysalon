<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('mainpage');
            //dd(auth()->user());
        }
        return redirect('auth.login')->with('error', 'Введён неверный адрес электронной почты или пароль.');
        /*return back()->withErrors([
            'email' => 'Введён неверный адрес электронной почты или пароль.',
        ]);*/
    }

    public function logout(Request $request)
    {
        Auth::logout();
        /*$request->session()->invalidate();
        $request->session()->regenerateToken();*/
        return view('auth.login');
        //dd(auth()->user());
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink($request->only('email'));
        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', 'Письмо для сброса пароля отправлено на указанную электронную почту')
            : back()->withErrors(['email' => __($status)]);
        //redirect('auth.forgot-password')->with('success', 'Письмо для сброса пароля отправлено на указанную электронную почту');
    }

    public function forgotPass()
    {
        return view('auth.forgot-password');
    }

    public function resetPassword($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function passwordReset(Request $request)
    {
        $request->validate([
            'token' => 'required', 
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)])->setRememberToken(Str::random(60));
                $user->save();

                event(new PasswordReset($user));
            }
        );
        return $status === Password::PASSWORD_RESET
            //? redirect()->route('login')->with('status', __($status))
            ? redirect()->route('login')->with('success', 'Пароль успешно изменён')
            : back()->withErrors(['email' => [__($status)]]);
    }
}
