<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signup(Request $request){
        $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]);
        $users = new User();
        $users->user = $request->user;
        $users->password = Hash::make($request->password);
        $users->save();

        return view('home').'<script language="javascript">alert("Usuario Registrado");</script>';
    }

    public function login(Request $request){
        $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]);

        $users = User::where('user', $request->user)->first();
        if ($users == null){
            return '<script language="javascript">alert("Usuario o contraseña incorrecta");</script>';
        }
        elseif (password_verify($request->password, $users->password)) {
            session_start();
            $_SESSION['user'] = $users;
            return redirect()->route('AdminHome', compact('users'));
        } else {
            return '<script language="javascript">alert("Usuario o contraseña incorrecta");</script>';
        }
    }
    public function logout(){
        session_start();
        session_destroy();
        return redirect()->route('home');
    }
}
