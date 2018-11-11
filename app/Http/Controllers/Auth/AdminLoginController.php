<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
      // code...
      $this->middleware('guest:admin',['except'=>['logout']]);
    }
    public function ShowLoginForm()
    {
      // code...
      return view('auth.admin-login');
    }
    public function login(Request $request)
    {
      // code...
      // validate the Form database
      $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|min:6'

      ]);

      //Attempt the user logged in

if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){

      //if Success Redirect into the admin page
      return redirect()->intended(route('admin.dashboard'));
    }
else {
  return redirect()->back()->withInput($request->only('email','remember'));
}

      //if unsuccessfull redirect into the admin login page
    }



    public function logout()
    {
        Auth::guard('admin')->logout();



        return redirect()->route('admin.login');
    }
}
