<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
   public function index()
   {
      return view('admin.auth.login');
   }

   public function login(LoginRequest $request)
   {
    $email = $request->email;
    $password = $request->password;
    $remember = $request->remember;

    !is_null($remember) ? $remember = true : $remember = false;

    $user = Login::where('email',$email)->first();

    if($user && Hash::check($password,$user->password))
    {
        Auth::login($user);
        return redirect()->route('admin.dashboard');
    }else{
        return redirect()
        ->route('login')
        ->withErrors([
            'email' => 'Bu emaille bir istifadeci tapilmadi'
        ])
        ->onlyInput('email');
    }
   }
}
