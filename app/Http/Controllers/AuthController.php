<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //for registration
    public function register(Request $request){
        //Validate
        $fields=$request->validate([
            'phone'=>['required','max:100'],
            'secondary_education'=>['required','max:50','in:form four,EQ'],
            'form_4_index_number'=>['required','max:50','unique:users'],
            'level_applying'=>['required','max:100'],
            'email'=>['required','max:50','email','unique:users'],
            'password'=>['required','min:3','confirmed'],

        ]);

        //register user
        $user=User::create($fields);

        //login
        Auth::login($user);

        //direct
        return redirect()->route('login');
    }

    public function login(Request $request){
        //Validate
        $fields=$request->validate([
            'email'=>['required','max:50'],
            'password'=>['required'],
        ]);

        if(Auth::attempt($fields, $request->remember)){
            return redirect()->route('profile');
        }else{
            return back()->withErrors([
                'failed'=>'The provided credentials don\'t match our records'
            ]);
        }
}

    public function logout(Request $request){
        Auth::logout();
        $request ->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}


