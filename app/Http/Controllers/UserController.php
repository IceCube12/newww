<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Vallidate\Rule;
use Illuminate\Support\Facade\Hash;
use App\Model\User;

class UserController extends Controller
{
    public function register(){
        return view('user.register');
    }

    public function store(Request $req){
        //($req);
        $validated=$req->validate([
        "name"=>['required','min:4'],
        "email"=>['required','email', Rule::unique('users','email'),],
        "password"=>'required|confirmed|min:6'
        ]);
        
        $validated['password']=Hash::make($validated['password']);
        $user=User::create($validated);
        
        return redirect("/");
        
        }

    public function login(){
        return view('user.login');
    }

    public function process(Request $req){
        $validated=$req->validate([
            "email"=>['required', 'email'],
            "password"=>'required'
        ]);
        if(auth()->attempt($validated)){
            $req->session()->regenerate();
            return redirect("/");
        }
    }

}