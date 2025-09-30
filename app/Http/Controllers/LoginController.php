<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function login(Request $request)
    {
        $validate = $request->validate([
            'uname'=>'required',
            'password'=>'required'
        ]);
        $uname = $validate['uname'];
        $password =$validate['password'];

        if ($uname === "admin" && $password === "admin") {
            // Save admin in session
            $request->session()->put('is_admin', true);
            return redirect('/billing');
        } else {
            return redirect('/login')->with('error', 'Invalid credentials');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');
        return redirect('/login');
    }
}
