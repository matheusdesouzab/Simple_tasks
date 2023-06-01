<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\AuthRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(AuthRegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return back()->with('message', 'Sua conta no Simple Tasks foi criada com sucesso');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/');
        }

        return back()->with('message', 'Os dados informados estão incorretos');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
