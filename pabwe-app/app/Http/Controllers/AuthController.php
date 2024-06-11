<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getLogin(Request $request){

        return view("auth.login");

    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'email'=> 'required|email|exists:users',
            'password'=> 'required|string|min:5',
        ]);

        $user = User::where("email", $request->email)->first();
        if(! Hash::check($request->password, $user->password)){
            return redirect()->route("login")->with("error", "kredensial akun tidak ditemukan");
        }

        Auth::attempt([
            "email"=> $request->email,
            "password"=> $request->password
        ]);

        return redirect()->route("adminView");
    }

    public function getRegister(Request $request){
        if(Auth::user()){
            return redirect()->route("home");
        }


        return view("auth.register");

    }

    public function postRegister(Request $request){
        $this->validate($request, [
            'name' => 'required|String',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|string|min:5',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route("login");
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route("login");
    }

    public function index(Request $request){

        $auth = Auth::user();

        $data = [
            "auth" => $auth
        ];
        return view("index");
    }
}
