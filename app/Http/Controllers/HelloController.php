<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{

// انشاء حساب
public function register(){
//  $users=User::all();
    return view('register');
    // dd($request->all());

 }
 
 public function store(Request $request){
    $request->validate([
        //   'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:5|confirmed', 
          'phone' => 'required|numeric|digits:9',



    ] );
    $users=User::create([
    //   'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,

    ]);
    Auth::login($users);
    return redirect('/home')->with('success','تم تسجيل الدخول بنجاح');

 }
//  تسجيل الدخول
 public function showlogin(){

    return view('login');
 }
public function login(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email','password');

    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended('/home');
    }
return back()->withErrors(['login_error' => 'الايميل او كلمة المرور غير صحيحة']);



}
// تسجيل الخروج
public function logout(Request $request){
   Auth::logout();
   $request->session()->invalidate();
   $request->session()->regenerateToken();
   return redirect('/home')->with('success', 'تم تسجيل الخروج بنجاح');
    

}

}