<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $email = $request->query('email');
        $password = $request->query('password');
        $credentials = ['email' => $email, 'password' => $password];
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/home');
        } else {
            Facade::error('error');
            return back()->with('flash_message', '로그인 되지 않았습니다')->withInput();
        }
    }
}
