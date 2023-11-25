<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
  public function getlogin(Request $request){

    if(Auth::user()){
      return redirect()->route("home");
    }
    return view("auth.login");
  }

  public function postlogin(Request $request){
    $this->validate($request, [
      "email"=> "required|email|exists:users",
      "password"=> "required|string|min:6",
    ]);

    $user = User::where("email", $request->email)->first(); 
    if(!Hash::check($request->password, $user->password)){
      return redirect()->route("login")->with("error", "Kredensial akun tidak ditemukan"); 
    }

    Auth::attempt([
      "email"=> $request->email,
      "password"=> $request->password
    ]);

    return redirect()->route("home");

  }

  public function getRegister(Request $request){
    if(Auth::user()){
      return redirect()->route("home");
    }
    return view("auth.register");
  }

  public function postRegister(Request $request){
    $this->validate($request, [
      "name"=> "required|string",
      "email"=> "required|email|unique:users",
      "password"=> "string||min:6",
    ]);

    $nextUser = User::create([
      "name"=> $request->name,
      "email"=> $request->email,
      "password"=> Hash::make($request->password),
    ]);

    return redirect()->route("login");

  }

  public function getLogout(Request $request){
    Auth::logout();
    return redirect()->route("login");
  }

}
