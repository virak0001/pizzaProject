<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request){
        $request -> validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);
       session_start();
       $email = $request->get('email');
       $verify_email = User::where('email', $email)->first()->exists();
       $user_password = User::where('email', $email)->first()->password;
       $verify_password = Hash::check($request->get('password'),$user_password);
       if($verify_email == true && $verify_password== true){
        session(['email'=>$email]);
        session('email');
        return redirect('/home');
       }else {
            return redirect('/');
       }
   }
}
