<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class registerController extends Controller
{
   
    public function signin(Request $request){
            session_start();

            // validation field
            $request -> validate([
                'email' => 'required | email',
                'password' => 'required',
                'address' => 'required',
            ]);

            // create new object from user model
            $user = New User();
            // verify email 
            $check_email = User::where('email',$request->get('email'))->exists();
    
            // if email
            if(!$check_email){
    
                $hashed_random_password = Hash::make($request->get('password'));
                $user -> email = $request -> get('email');
                $user -> password = $hashed_random_password;
                $user -> address = $request -> get('address');
                session(['email'=>$request->get('email')]);
                if($request->get('role') == null){
                    $user -> role = 0;
                }else {
                    $user -> role = $request->get('role');
                }
                $user -> save();
                return redirect('/home');
    
            }else {
                return redirect()->back();
            }           
    }

    
}
