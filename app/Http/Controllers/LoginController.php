<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
    $user= User::where(['email'=>$request->email])->first();
        //return $request->input();
       // return $request->password;
        if(!$user || !Hash::check($request->password,$user->password)){
            return 'Username And Password Incorrect';
        }
        else {
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }
}
