<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class Auth extends Controller
{
    public function loginPage(Request $request)
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //
    }


    public function registerPage(Request $request)
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = new User($request->validated());
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('loginPage');
    }
}
