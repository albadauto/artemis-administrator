<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Index(){
        return view('login/index');
    }

    public function AuthUser(LoginRequest $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credentials)){
            session()->regenerate();
            return redirect()->route('home.index');
        }else{
            return redirect()->back()->with('error', 'Login ou senha incorreto(s)');
        }
    }

    public function ForAdmin(){
        $user = new User();
        $user->email = 'jobarbosa@jrosoftwares.com.br';
        $user->password = Hash::make('root');
        $user->name = 'José Adauto';
        $user->save();
        return redirect()->back();
    }

    public function Logout(){
        Auth::logout();
        return redirect()->route('login.Index');
    }

}
