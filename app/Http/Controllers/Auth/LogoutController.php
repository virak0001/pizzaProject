<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
session_start();
class LogoutController extends Controller
{
    public function logout(){
        if (session('email')) {
            session::forget('email');
            return redirect('/');
        }
    }
}
