<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    public function getlogin(){
        return view('login');
    }

    public function postlogin(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone' => 'required|max:10|regex:/^[26][0-9]{9}$/'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email'=>'invalid credentials'
        ])->withInput();

    }

    public function dashboard(){
        return view('dashboard');
    }

}
