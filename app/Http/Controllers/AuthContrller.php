<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthContrller extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('todo');
        }else {
            return redirect()->route('login')->with('error', 'username atau password salah');
        }
    }
    
    public function register() {
        return view('auth.register');
    }

    public function storeRegister(Request $request) {
        $request->validate([
            'fullname' => 'required|min:3|max:225',
            'username' => 'required|min:3|max:225|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7'
        ]);

        $data = new User;
        $data->fullname = $request->fullname;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        
        // User::create($request->all());
        $data->save();
        return redirect()->route('todo');    
    }    
    
    
    public function delete() {
        Auth::logout();
        return redirect()->route('home');
    }
}
