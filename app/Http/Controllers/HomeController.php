<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\User;
use Illuminate\Http\Request;

session_start();
class HomeController extends Controller
{
    public function index(){
        if(session('email')){
            $role = User::where('email', session('email'))->first()->role;
            $email = session('email');
            $pizzas = pizza::all();
            return view('home',compact(['email','pizzas','role']));
        }else {
            return redirect('/');
        }
    }
}
