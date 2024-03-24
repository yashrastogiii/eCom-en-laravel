<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function login(Request $req) {
        $user = User::where(['email'=>$req->email])->first();
        if (!$user) {
            return "Username or Password is incorrect";
        }
        
        if (Hash::check($req->password, $user->password)) {
            $req->session()->put('user', $user);
            return redirect('/');
        } else {
            return "Username or Password is incorrect";
        }
    }
}